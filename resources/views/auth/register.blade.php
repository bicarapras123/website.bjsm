<x-guest-layout>
    <div class="w-full max-w-2xl bg-white shadow-2xl rounded-3xl overflow-hidden p-8 border border-slate-100">
        
        <div class="flex flex-col items-center mb-8">
            <div class="w-16 h-16 bg-gradient-to-br from-emerald-600 to-emerald-900 rounded-2xl flex items-center justify-center shadow-lg mb-3 overflow-hidden">
                <img src="{{ asset('images/logobjsm.jpeg') }}" alt="BJSM Logo" class="w-full h-full object-cover">
            </div>
            <h2 class="text-lg font-bold text-slate-800 font-luxury-title tracking-wider uppercase">Registrasi Admin</h2>
        </div>

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-600 rounded-xl text-xs">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <div>
                        <x-input-label for="name" :value="__('Name')" class="text-slate-600 font-semibold" />
                        <x-text-input id="name" class="block mt-2 w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500" type="text" name="name" :value="old('name')" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" class="text-slate-600 font-semibold" />
                        <x-text-input id="email" class="block mt-2 w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="referral_code" :value="__('Kode Akses Admin')" class="text-slate-600 font-semibold" />
                        <x-text-input id="referral_code" class="block mt-2 w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500" type="text" name="referral_code" :value="old('referral_code')" required />
                    </div>
                </div>

                <div>
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="text-slate-600 font-semibold" />
                        <x-text-input id="password" class="block mt-2 w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500" type="password" name="password" required />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-slate-600 font-semibold" />
                        <x-text-input id="password_confirmation" class="block mt-2 w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500" type="password" name="password_confirmation" required />
                    </div>
                    
                    <div class="mt-8 flex items-center justify-end">
                        <a class="text-sm text-slate-500 hover:text-emerald-700 underline transition" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <x-primary-button class="w-full justify-center bg-emerald-700 hover:bg-emerald-800 py-3 rounded-xl shadow-lg shadow-emerald-200">
                    {{ __('Register Now') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>