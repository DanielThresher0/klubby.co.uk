<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="max-w-md mx-auto">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Welcome Back</h1>
            <p class="text-gray-600">Sign in to your Klubby account</p>
        </div>

        <!-- User Type Tabs -->
        <div class="mb-6">
            <div class="flex rounded-lg bg-gray-100 p-1" role="tablist">
                <button type="button" 
                        id="member-tab" 
                        class="flex-1 rounded-md py-2 px-4 text-sm font-medium transition-all duration-200 bg-white text-indigo-600 shadow-sm"
                        onclick="switchTab('member')"
                        role="tab"
                        aria-selected="true"
                        aria-controls="member-panel">
                    <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Member
                </button>
                <button type="button" 
                        id="partner-tab" 
                        class="flex-1 rounded-md py-2 px-4 text-sm font-medium text-gray-600 transition-all duration-200"
                        onclick="switchTab('partner')"
                        role="tab"
                        aria-selected="false"
                        aria-controls="partner-panel">
                    <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Partner
                </button>
            </div>
        </div>

        <!-- Member Login Form -->
        <div id="member-panel" role="tabpanel" aria-labelledby="member-tab">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="hidden" name="user_type" value="member">

                <div class="bg-white rounded-lg shadow-lg border border-gray-200">
                    <div class="p-6 space-y-6">
                        <!-- Email Address -->
                        <div>
                            <x-input-label for="member_email" value="Email" />
                            <x-text-input id="member_email" 
                                         class="block mt-1 w-full" 
                                         type="email" 
                                         name="email" 
                                         :value="old('email')" 
                                         required 
                                         autofocus 
                                         autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div>
                            <x-input-label for="member_password" value="Password" />
                            <x-text-input id="member_password" 
                                         class="block mt-1 w-full"
                                         type="password"
                                         name="password"
                                         required 
                                         autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center justify-between">
                            <label for="member_remember" class="inline-flex items-center">
                                <input id="member_remember" 
                                       type="checkbox" 
                                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                                       name="remember">
                                <span class="ms-2 text-sm text-gray-600">Remember me</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-indigo-600 hover:text-indigo-500" href="{{ route('password.request') }}">
                                    Forgot password?
                                </a>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <x-primary-button class="w-full justify-center py-3">
                                Sign In
                            </x-primary-button>
                        </div>

                        <!-- Sign Up Link -->
                        <div class="text-center pt-4 border-t">
                            <p class="text-sm text-gray-600">
                                New to Klubby? 
                                <a href="{{ route('user.register') }}" class="text-indigo-600 hover:text-indigo-500 font-medium">
                                    Start your free trial
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Partner Login Form -->
        <div id="partner-panel" role="tabpanel" aria-labelledby="partner-tab" class="hidden">
            <form method="POST" action="{{ route('partner.login') }}">
                @csrf
                <input type="hidden" name="user_type" value="partner">

                <div class="bg-white rounded-lg shadow-lg border border-gray-200">
                    <div class="p-6 space-y-6">
                        <!-- Notice -->
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-3">
                            <p class="text-sm text-blue-700">
                                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Partner portal for business accounts only
                            </p>
                        </div>

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="partner_email" value="Business Email" />
                            <x-text-input id="partner_email" 
                                         class="block mt-1 w-full" 
                                         type="email" 
                                         name="email" 
                                         :value="old('email')" 
                                         required 
                                         autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div>
                            <x-input-label for="partner_password" value="Password" />
                            <x-text-input id="partner_password" 
                                         class="block mt-1 w-full"
                                         type="password"
                                         name="password"
                                         required 
                                         autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center justify-between">
                            <label for="partner_remember" class="inline-flex items-center">
                                <input id="partner_remember" 
                                       type="checkbox" 
                                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                                       name="remember">
                                <span class="ms-2 text-sm text-gray-600">Remember me</span>
                            </label>

                            @if (Route::has('partner.password.request'))
                                <a class="text-sm text-indigo-600 hover:text-indigo-500" href="{{ route('partner.password.request') }}">
                                    Forgot password?
                                </a>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <x-primary-button class="w-full justify-center py-3">
                                Sign In to Partner Portal
                            </x-primary-button>
                        </div>

                        <!-- Sign Up Link -->
                        <div class="text-center pt-4 border-t">
                            <p class="text-sm text-gray-600">
                                Want to become a partner? 
                                <a href="{{ route('partner.register') }}" class="text-indigo-600 hover:text-indigo-500 font-medium">
                                    Apply now
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Back to Home Link -->
        <div class="text-center mt-8">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Home
            </a>
        </div>
    </div>

    <!-- JavaScript for tab switching -->
    <script>
        function switchTab(tab) {
            const memberTab = document.getElementById('member-tab');
            const partnerTab = document.getElementById('partner-tab');
            const memberPanel = document.getElementById('member-panel');
            const partnerPanel = document.getElementById('partner-panel');

            if (tab === 'member') {
                // Switch to member tab
                memberTab.classList.add('bg-white', 'text-indigo-600', 'shadow-sm');
                memberTab.classList.remove('text-gray-600');
                memberTab.setAttribute('aria-selected', 'true');
                
                partnerTab.classList.remove('bg-white', 'text-indigo-600', 'shadow-sm');
                partnerTab.classList.add('text-gray-600');
                partnerTab.setAttribute('aria-selected', 'false');
                
                memberPanel.classList.remove('hidden');
                partnerPanel.classList.add('hidden');
                
                // Focus first input
                document.getElementById('member_email').focus();
            } else {
                // Switch to partner tab
                partnerTab.classList.add('bg-white', 'text-indigo-600', 'shadow-sm');
                partnerTab.classList.remove('text-gray-600');
                partnerTab.setAttribute('aria-selected', 'true');
                
                memberTab.classList.remove('bg-white', 'text-indigo-600', 'shadow-sm');
                memberTab.classList.add('text-gray-600');
                memberTab.setAttribute('aria-selected', 'false');
                
                partnerPanel.classList.remove('hidden');
                memberPanel.classList.add('hidden');
                
                // Focus first input
                document.getElementById('partner_email').focus();
            }
        }

        // Check if there's a user_type in the URL (for error redirects)
        const urlParams = new URLSearchParams(window.location.search);
        const userType = urlParams.get('type');
        if (userType === 'partner') {
            switchTab('partner');
        }
    </script>
</x-guest-layout>
