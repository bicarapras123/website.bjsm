<x-guest-layout>
    <!-- Card Container -->
    <div class="w-full max-w-md bg-white shadow-2xl rounded-3xl overflow-hidden p-8 border border-slate-100">
        
        <!-- Logo Section -->
        <div class="flex flex-col items-center mb-8">
            <div class="w-24 h-24 bg-gradient-to-br from-emerald-600 to-emerald-900 rounded-2xl flex items-center justify-center shadow-lg mb-4 overflow-hidden">
                <img src="{{ asset('images/logobjsm.jpeg') }}" alt="BJSM Logo" class="w-full h-full object-cover">
            </div>
            <h2 class="text-2xl font-bold text-slate-800 font-luxury-title tracking-wider">LOGIN ADMIN</h2>
            <p class="text-sm text-slate-400 mt-1 uppercase tracking-widest font-semibold">BJSM Venue Management</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email Address')" class="text-slate-600 font-semibold" />
                <x-text-input id="email" class="block mt-2 w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-5">
                <x-input-label for="password" :value="__('Password')" class="text-slate-600 font-semibold" />
                <x-text-input id="password" class="block mt-2 w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-6">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-emerald-600 shadow-sm focus:ring-emerald-500" name="remember">
                    <span class="ms-2 text-sm text-slate-600">{{ __('Remember me') }}</span>
                </label>

            </div>

            <div class="mt-8">
                <x-primary-button class="w-full justify-center bg-emerald-700 hover:bg-emerald-800 py-3 rounded-xl shadow-lg shadow-emerald-200">
                    {{ __('Sign In to Dashboard') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>