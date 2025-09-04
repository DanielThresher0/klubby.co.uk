<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class PartnerRegisterController extends Controller
{
    /**
     * Display the partner registration view.
     */
    public function create(): View
    {
        return view('auth.partner-register');
    }

    /**
     * Handle an incoming partner registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'business_name' => ['required', 'string', 'max:255'],
            'company_number' => ['required', 'string', 'max:255'],
            'business_type' => ['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Partner::class],
            'contact_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'website' => ['required', 'url', 'max:255'],
            'description' => ['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms' => ['accepted'],
        ]);

        $partner = Partner::create([
            'business_name' => $request->business_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact_name' => $request->contact_name,
            'phone' => $request->phone,
            'website' => $request->website,
            'description' => $request->description,
            'category' => $this->mapBusinessTypeToCategory($request->business_type),
            'status' => 'pending',
        ]);

        event(new Registered($partner));

        // Don't auto-login partners - they need admin approval
        return redirect()->route('partner.register.success');
    }

    /**
     * Map business type to category
     */
    private function mapBusinessTypeToCategory(string $businessType): string
    {
        $mapping = [
            'Retail & E-commerce' => 'retail',
            'Food & Hospitality' => 'food_drink',
            'Health, Beauty & Wellbeing' => 'health_beauty',
            'Travel & Leisure' => 'travel',
            'Events & Entertainment' => 'entertainment',
            'Professional Services' => 'services',
            'Trades & Home Services' => 'services',
            'Fitness & Sports' => 'health_beauty',
        ];

        return $mapping[$businessType] ?? 'other';
    }
}