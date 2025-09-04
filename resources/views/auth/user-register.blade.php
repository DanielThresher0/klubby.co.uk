<x-guest-layout>
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="mb-6">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-indigo-600 hover:text-indigo-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Home
                </a>
            </div>
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Join Klubby Today</h1>
            <p class="text-lg text-gray-600">
                Start saving money and winning prizes with your 
                <span class="text-indigo-600 font-semibold">7-day free trial</span>
            </p>
        </div>

        <!-- Limited Time Badge -->
        <div class="text-center mb-6">
            <div class="inline-flex items-center gap-2 text-sm text-green-800 bg-green-100 px-4 py-2 rounded-full">
                <div class="w-2 h-2 bg-green-600 rounded-full animate-pulse"></div>
                Limited time offer - Join now!
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Plans Column -->
            <div class="lg:col-span-1">
                <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                    Choose Your Plan
                </h2>

                <!-- Plans -->
                <div class="space-y-4">
                    <!-- Starter Plan -->
                    <label class="relative block p-4 border-2 rounded-lg cursor-pointer hover:shadow-lg transition group">
                        <input type="radio" name="plan" value="starter" class="sr-only peer" />
                        <div class="peer-checked:border-indigo-600 peer-checked:bg-indigo-50">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h3 class="font-semibold text-lg">Starter</h3>
                                    <span class="text-xs font-medium text-indigo-600 bg-indigo-100 px-2 py-0.5 rounded-full">£1.15/week</span>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-gray-900">£5</div>
                                    <div class="text-sm text-gray-600">/month</div>
                                </div>
                            </div>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Full access to rewards club
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    1x entry into every draw
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Cancel anytime
                                </li>
                            </ul>
                        </div>
                    </label>

                    <!-- Essentials Plan (Most Popular) -->
                    <label class="relative block p-4 border-2 border-indigo-600 rounded-lg cursor-pointer shadow-lg bg-gradient-to-br from-indigo-50 to-white transition group">
                        <input type="radio" name="plan" value="essentials" class="sr-only peer" checked />
                        <span class="absolute -top-2 left-4 bg-gradient-to-r from-indigo-600 to-indigo-700 text-white text-xs font-semibold px-2 py-0.5 rounded-full shadow">
                            Most Popular
                        </span>
                        <div class="peer-checked:bg-gradient-to-br peer-checked:from-indigo-100 peer-checked:to-indigo-50">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h3 class="font-semibold text-lg">Essentials</h3>
                                    <span class="text-xs font-medium text-indigo-600 bg-indigo-100 px-2 py-0.5 rounded-full">£5.77/week</span>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-indigo-600">£25</div>
                                    <div class="text-sm text-gray-600">/month</div>
                                </div>
                            </div>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Full access to rewards club
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    4x entries into every draw
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    4x BONUS entries first month
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Birthday month bonuses
                                </li>
                            </ul>
                        </div>
                    </label>

                    <!-- Premium Plan -->
                    <label class="relative block p-4 border-2 border-yellow-500 rounded-lg cursor-pointer hover:shadow-lg bg-gradient-to-br from-yellow-50 to-white transition group">
                        <input type="radio" name="plan" value="premium" class="sr-only peer" />
                        <span class="absolute -top-2 right-4 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white text-xs font-semibold px-2 py-0.5 rounded-full shadow flex items-center gap-1">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            Premium
                        </span>
                        <div class="peer-checked:border-yellow-500 peer-checked:bg-yellow-50">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h3 class="font-semibold text-lg">Premium</h3>
                                    <span class="text-xs font-medium text-yellow-700 bg-yellow-100 px-2 py-0.5 rounded-full">£11.55/week</span>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-yellow-600">£50</div>
                                    <div class="text-sm text-gray-600">/month</div>
                                </div>
                            </div>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Full access to rewards club
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    10x entries into every draw
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    10x BONUS entries first month
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Premium member benefits
                                </li>
                            </ul>
                        </div>
                    </label>
                </div>

                <!-- Free Trial Notice -->
                <div class="mt-4 bg-green-50 border border-green-200 rounded-lg p-4">
                    <p class="text-sm text-green-700 font-medium text-center">
                        ✨ All plans include a 7-day free trial - Cancel anytime!
                    </p>
                </div>
            </div>

            <!-- Account Details Form -->
            <div class="lg:col-span-2">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="hidden" name="selected_plan" id="selected_plan" value="essentials">

                    <div class="bg-white rounded-lg shadow-lg border border-gray-200">
                        <div class="border-b p-6">
                            <h2 class="text-xl font-semibold text-gray-900 flex items-center gap-2">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                Create Your Account
                            </h2>
                            <p class="text-sm text-gray-600 mt-1">Enter your details to get started with your free trial</p>
                        </div>

                        <div class="p-6 space-y-6">
                            <!-- Name -->
                            <div>
                                <x-input-label for="name" value="Full Name" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required :value="old('name')" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email -->
                            <div>
                                <x-input-label for="email" value="Email Address" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" required :value="old('email')" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Date of Birth -->
                            <div>
                                <x-input-label for="date_of_birth" value="Date of Birth" />
                                <x-text-input id="date_of_birth" name="date_of_birth" type="date" class="mt-1 block w-full" required :value="old('date_of_birth')" />
                                <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                                <p class="text-xs text-gray-500 mt-1">Used for birthday bonuses and to verify you're 18+</p>
                            </div>

                            <!-- Password Fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <x-input-label for="password" value="Password" />
                                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" required />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="password_confirmation" value="Confirm Password" />
                                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" required />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Referral Code -->
                            <div>
                                <x-input-label for="referral_code" class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    Referral Code (Optional)
                                </x-input-label>
                                <x-text-input id="referral_code" name="referral_code" type="text" class="mt-1 block w-full" placeholder="Enter friend's referral code" :value="old('referral_code')" />
                                <p class="text-xs text-indigo-600 mt-1">Get 5 bonus entries when a friend refers you!</p>
                            </div>

                            <!-- Terms & Conditions -->
                            <div>
                                <label class="flex items-start">
                                    <input type="checkbox" name="terms" required class="rounded border-gray-300 text-indigo-600 shadow-sm mt-1">
                                    <span class="ml-2 text-sm text-gray-600">
                                        I agree to the <a href="/terms" target="_blank" class="text-indigo-600 hover:text-indigo-500 underline">Terms & Conditions</a> 
                                        and <a href="/privacy" target="_blank" class="text-indigo-600 hover:text-indigo-500 underline">Privacy Policy</a>
                                    </span>
                                </label>
                                <x-input-error :messages="$errors->get('terms')" class="mt-2" />
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <x-primary-button class="w-full justify-center py-3">
                                    Start My Free Trial
                                </x-primary-button>
                                
                                <div class="mt-3 flex items-center justify-center gap-1">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    <span class="text-xs text-gray-600">Secure payment powered by Stripe</span>
                                </div>

                                <p class="text-xs text-gray-500 text-center mt-4">
                                    Already have an account? 
                                    <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-500 underline">Sign in here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Free Entry Method Link -->
        <div class="text-center mt-8">
            <a href="/free-entry" class="text-sm text-indigo-600 hover:text-indigo-500 underline">
                Free entry method
            </a>
        </div>
    </div>

    <!-- JavaScript for plan selection -->
    <script>
        document.querySelectorAll('input[name="plan"]').forEach(radio => {
            radio.addEventListener('change', (e) => {
                document.getElementById('selected_plan').value = e.target.value;
            });
        });
    </script>
</x-guest-layout>