<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <p class="text-sm text-slate-400 mt-1">Pantau performa dan ringkasan data sistem Anda di sini.</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <div class="bg-gradient-to-r from-indigo-600 to-violet-700 overflow-hidden shadow-lg shadow-indigo-100 rounded-2xl flex items-center p-6 sm:p-8 text-white relative">
                <div class="absolute right-0 top-0 translate-x-10 -translate-y-10 opacity-10 pointer-events-none">
                    <svg class="w-64 h-64" fill="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                
                <div class="z-10">
                    <h3 class="font-bold text-xl sm:text-2xl">
                        Selamat Datang kembali, {{ Auth::user()->name }}! 👋
                    </h3>
                    <p class="text-indigo-100 text-sm mt-1.5 max-w-xl">
                        Sistem mendeteksi aktivitas berjalan dengan lancar. Anda masuk menggunakan hak akses penuh sebagai <span class="font-semibold underline">Administrator</span>.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Total Pengguna</p>
                        <h4 class="text-3xl font-bold text-slate-800 mt-2">1,248</h4>
                        <span class="text-xs font-medium text-emerald-600 inline-flex items-center mt-1">
                            ▲ 12% <span class="text-slate-400 ml-1">bulan ini</span>
                        </span>
                    </div>
                    <div class="p-3 bg-emerald-50 text-emerald-600 rounded-xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Transaksi Baru</p>
                        <h4 class="text-3xl font-bold text-slate-800 mt-2">85</h4>
                        <span class="text-xs font-medium text-indigo-600 inline-flex items-center mt-1">
                            ▲ 5.4% <span class="text-slate-400 ml-1">hari ini</span>
                        </span>
                    </div>
                    <div class="p-3 bg-indigo-50 text-indigo-600 rounded-xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-center justify-between sm:col-span-2 lg:col-span-1">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Status Server</p>
                        <h4 class="text-3xl font-bold text-slate-800 mt-2">99.9%</h4>
                        <span class="text-xs font-medium text-emerald-600 inline-flex items-center mt-1">
                            ● Stabil <span class="text-slate-400 ml-1">- Online</span>
                        </span>
                    </div>
                    <div class="p-3 bg-amber-50 text-amber-600 rounded-xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>