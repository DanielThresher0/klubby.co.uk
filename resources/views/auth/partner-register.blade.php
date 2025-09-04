<x-guest-layout>
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-green-100 to-blue-100 text-green-800 px-4 py-2 rounded-full text-sm font-medium mb-6 border border-green-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13M5 3v18a2 2 0 002 2h10a2 2 0 002-2V3M9 3h6" />
                </svg>
                Free Partnership Program
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Partner with Klubby</h2>
            <p class="text-gray-600">Join our growing partner network and start reaching new customers</p>
        </div>

        <!-- Benefits Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div class="bg-white border-2 border-blue-200 rounded-lg p-4 text-center hover:shadow-lg transition">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1">Reach New Customers</h3>
                <p class="text-sm text-gray-600">Access our growing community</p>
            </div>
            
            <div class="bg-white border-2 border-green-200 rounded-lg p-4 text-center hover:shadow-lg transition">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1">Increase Sales</h3>
                <p class="text-sm text-gray-600">Drive more traffic and revenue</p>
            </div>
            
            <div class="bg-white border-2 border-purple-200 rounded-lg p-4 text-center hover:shadow-lg transition">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1">Flexible Offers</h3>
                <p class="text-sm text-gray-600">Choose what works for you</p>
            </div>
        </div>

        <!-- Registration Form -->
        <div class="bg-white rounded-lg shadow-lg border border-gray-200">
            <div class="bg-gradient-to-r from-gray-50 via-blue-50 to-purple-50 border-b p-6">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-600 rounded-lg shadow">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Partner Application</h3>
                </div>
                <p class="text-gray-600 mt-2">Complete your free application to join our partner network</p>
            </div>
            
            <form method="POST" action="{{ route('partner.register') }}" class="p-6 space-y-6">
                @csrf
                
                <!-- Business Information Section -->
                <div class="space-y-4">
                    <div class="border-l-4 border-blue-500 pl-4">
                        <h4 class="text-lg font-semibold text-gray-900">Business Information</h4>
                        <p class="text-sm text-gray-600">Tell us about your business</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Business Name -->
                        <div>
                            <x-input-label for="business_name" value="Business Name *" />
                            <x-text-input id="business_name" name="business_name" type="text" class="mt-1 block w-full" 
                                placeholder="Your Business Name" required :value="old('business_name')" />
                            <x-input-error :messages="$errors->get('business_name')" class="mt-2" />
                        </div>
                        
                        <!-- Company Number -->
                        <div>
                            <x-input-label for="company_number" value="Company Registration Number *" />
                            <x-text-input id="company_number" name="company_number" type="text" class="mt-1 block w-full" 
                                placeholder="12345678" required :value="old('company_number')" />
                            <x-input-error :messages="$errors->get('company_number')" class="mt-2" />
                        </div>
                    </div>
                    
                    <!-- Business Type -->
                    <div>
                        <x-input-label for="business_type" value="Business Type *" />
                        <select id="business_type" name="business_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            <option value="">Select your business type</option>
                            <option value="Trades & Home Services">Trades & Home Services</option>
                            <option value="Retail & E-commerce">Retail & E-commerce</option>
                            <option value="Health, Beauty & Wellbeing">Health, Beauty & Wellbeing</option>
                            <option value="Food & Hospitality">Food & Hospitality</option>
                            <option value="Automotive">Automotive</option>
                            <option value="Fitness & Sports">Fitness & Sports</option>
                            <option value="Professional Services">Professional Services</option>
                            <option value="Creative, Media & Marketing">Creative, Media & Marketing</option>
                            <option value="Property & Real Estate">Property & Real Estate</option>
                            <option value="Tech & Digital">Tech & Digital</option>
                            <option value="Events & Entertainment">Events & Entertainment</option>
                            <option value="Travel & Leisure">Travel & Leisure</option>
                            <option value="Education & Training">Education & Training</option>
                            <option value="Pets & Animal Services">Pets & Animal Services</option>
                            <option value="Other">Other / Not Listed</option>
                        </select>
                        <x-input-error :messages="$errors->get('business_type')" class="mt-2" />
                    </div>
                    
                    <!-- Website and Social Media -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <x-input-label for="website" value="Website *" />
                            <x-text-input id="website" name="website" type="url" class="mt-1 block w-full" 
                                placeholder="https://www.yourbusiness.co.uk" required :value="old('website')" />
                            <x-input-error :messages="$errors->get('website')" class="mt-2" />
                        </div>
                        
                        <div>
                            <x-input-label for="facebook" value="Facebook (Optional)" />
                            <x-text-input id="facebook" name="facebook" type="url" class="mt-1 block w-full" 
                                placeholder="https://facebook.com/yourbusiness" :value="old('facebook')" />
                        </div>
                        
                        <div>
                            <x-input-label for="instagram" value="Instagram (Optional)" />
                            <x-text-input id="instagram" name="instagram" type="url" class="mt-1 block w-full" 
                                placeholder="https://instagram.com/yourbusiness" :value="old('instagram')" />
                        </div>
                    </div>
                    
                    <!-- Business Description -->
                    <div>
                        <x-input-label for="description" value="Business Description *" />
                        <textarea id="description" name="description" rows="4" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Tell us about your business, products, and services...">{{ old('description') }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                </div>
                
                <!-- Contact Information Section -->
                <div class="space-y-4">
                    <div class="border-l-4 border-green-500 pl-4">
                        <h4 class="text-lg font-semibold text-gray-900">Contact Information</h4>
                        <p class="text-sm text-gray-600">How can we reach you?</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Contact Name -->
                        <div>
                            <x-input-label for="contact_name" value="Contact Name *" />
                            <x-text-input id="contact_name" name="contact_name" type="text" class="mt-1 block w-full" 
                                placeholder="Primary contact person" required :value="old('contact_name')" />
                            <x-input-error :messages="$errors->get('contact_name')" class="mt-2" />
                        </div>
                        
                        <!-- Phone Number -->
                        <div>
                            <x-input-label for="phone" value="Phone Number *" />
                            <x-text-input id="phone" name="phone" type="tel" class="mt-1 block w-full" 
                                placeholder="07123 456789" required :value="old('phone')" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <x-input-label for="email" value="Email Address *" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" 
                            placeholder="contact@yourbusiness.co.uk" required :value="old('email')" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    
                    <!-- Password -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="password" value="Password *" />
                            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" required />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        
                        <div>
                            <x-input-label for="password_confirmation" value="Confirm Password *" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" required />
                        </div>
                    </div>
                </div>
                
                <!-- Terms and Conditions -->
                <div class="space-y-4">
                    <div class="flex items-start">
                        <input type="checkbox" id="terms" name="terms" required
                            class="mt-1 rounded border-gray-300 text-indigo-600 shadow-sm">
                        <label for="terms" class="ml-3 text-sm text-gray-600">
                            I accept the <a href="/partner-terms" target="_blank" class="text-indigo-600 hover:text-indigo-500 underline">partner terms and conditions</a>. 
                            Joining is completely free.
                        </label>
                    </div>
                    <x-input-error :messages="$errors->get('terms')" class="mt-2" />
                </div>
                
                <!-- Submit Button -->
                <div class="space-y-4">
                    <div class="bg-green-50 border-2 border-green-200 rounded-lg p-4">
                        <p class="text-sm text-green-800 font-medium text-center">
                            Your application will be reviewed promptly. After approval, you'll be able to create your deals. Join for free today!
                        </p>
                    </div>
                    
                    <x-primary-button class="w-full justify-center py-3">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                        Join Klubby
                    </x-primary-button>
                    
                    <div class="flex justify-center items-center gap-4 text-sm text-gray-600">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Free to join
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            No setup fees
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            No monthly costs
                        </span>
                    </div>
                    
                    <p class="text-xs text-gray-500 text-center">
                        Already have a partner account? <a href="{{ route('partner.login') }}" class="text-indigo-600 hover:text-indigo-500">Log in here</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>