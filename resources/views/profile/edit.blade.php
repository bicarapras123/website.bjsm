<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Profile') }}
            </h2>
            <p class="text-sm text-slate-400 mt-1">Kelola informasi akun, pengaturan keamanan, dan preferensi privasi Anda.</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-100 shadow-sm">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-100 shadow-sm">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-100 shadow-sm">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>