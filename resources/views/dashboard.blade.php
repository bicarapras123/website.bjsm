<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Data Booking Venue') }}
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

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Total Pengguna</p>
                        <h4 class="text-2xl font-bold text-slate-800 mt-1">{{ number_format($totalUsers) }}</h4>
                    </div>
                    <div class="p-2.5 bg-emerald-50 text-emerald-600 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Total Booking</p>
                        <h4 class="text-2xl font-bold text-slate-800 mt-1">{{ number_format($totalBookings) }}</h4>
                    </div>
                    <div class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Pending</p>
                        <h4 class="text-2xl font-bold text-amber-600 mt-1">{{ number_format($totalPending) }}</h4>
                    </div>
                    <div class="p-2.5 bg-amber-50 text-amber-600 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Confirmed</p>
                        <h4 class="text-2xl font-bold text-emerald-600 mt-1">{{ number_format($totalConfirmed) }}</h4>
                    </div>
                    <div class="p-2.5 bg-emerald-50 text-emerald-600 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center justify-between sm:col-span-2 lg:col-span-1">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Cancelled</p>
                        <h4 class="text-2xl font-bold text-rose-600 mt-1">{{ number_format($totalCancelled) }}</h4>
                    </div>
                    <div class="p-2.5 bg-rose-50 text-rose-600 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h3 class="font-bold text-lg text-slate-800">Data Pemesanan Venue BJSM</h3>
                        <p class="text-xs text-slate-400 mt-0.5">Geser tabel ke kanan untuk melihat seluruh kolom data secara lengkap.</p>
                    </div>
                    
                    <form action="{{ route('dashboard') }}" method="GET" class="flex items-center gap-2 w-full md:w-auto">
                        <div class="relative w-full md:w-80">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                            <input type="text" 
                                   name="search" 
                                   value="{{ request('search') }}" 
                                   placeholder="Cari nama, email, atau no telp..." 
                                   class="w-full pl-9 pr-4 py-2 text-sm rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 text-slate-700 bg-slate-50/50"
                            >
                        </div>
                        <button type="submit" class="px-4 py-2 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 rounded-xl transition shadow-sm shadow-indigo-100">
                            Cari
                        </button>
                        @if(request('search'))
                            <a href="{{ route('dashboard') }}" class="px-3 py-2 text-sm font-medium text-slate-500 bg-slate-100 hover:bg-slate-200 rounded-xl transition">
                                Reset
                            </a>
                        @endif
                    </form>
                </div>
                
                <div class="overflow-x-auto separation-scroll">
                    <table class="w-full text-left border-collapse min-w-[1800px]">
                        <thead>
                            <tr class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider border-b border-slate-100 whitespace-nowrap">
                                <th class="p-4">ID</th>
                                <th class="p-4">Customer Name</th>
                                <th class="p-4">Customer Email</th>
                                <th class="p-4">Customer Phone</th>
                                <th class="p-4">Company / Organization</th>
                                <th class="p-4">Event Title</th>
                                <th class="p-4">Event Date</th>
                                <th class="p-4">Start Time</th>
                                <th class="p-4">End Time</th>
                                <th class="p-4">Venue Package</th>
                                <th class="p-4">Total Pax</th>
                                <th class="p-4">Room Layout</th>
                                <th class="p-4">Grand Total</th>
                                <th class="p-4">Currency</th>
                                <th class="p-4" style="min-width: 160px;">Status</th>
                                <th class="p-4">Notes</th>
                                <th class="p-4">Created At</th>
                                <th class="p-4">Updated At</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-slate-600 divide-y divide-slate-100 whitespace-nowrap">
                            @forelse($recentBookings as $booking)
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="p-4 font-semibold text-slate-800">#{{ $booking->id }}</td>
                                    <td class="p-4 font-medium text-slate-900">{{ $booking->customer_name }}</td>
                                    <td class="p-4">{{ $booking->customer_email }}</td>
                                    <td class="p-4">{{ $booking->customer_phone }}</td>
                                    <td class="p-4">{{ $booking->company_or_organization ?? '-' }}</td>
                                    <td class="p-4 font-medium text-indigo-600">{{ $booking->event_title }}</td>
                                    <td class="p-4">{{ \Carbon\Carbon::parse($booking->event_date)->format('Y-m-d') }}</td>
                                    <td class="p-4">{{ \Carbon\Carbon::parse($booking->start_time)->format('H:i:s') }}</td>
                                    <td class="p-4">{{ \Carbon\Carbon::parse($booking->end_time)->format('H:i:s') }}</td>
                                    <td class="p-4">
                                        <span class="px-2.5 py-1 text-xs font-semibold bg-indigo-50 text-indigo-700 rounded-md">
                                            {{ $booking->venue_package }}
                                        </span>
                                    </td>
                                    <td class="p-4 text-slate-800 font-medium">{{ number_format($booking->total_pax) }}</td>
                                    <td class="p-4 text-xs bg-slate-50 text-slate-600 border border-slate-100 rounded-md py-1 px-2 inline-block mt-3">{{ $booking->room_layout }}</td>
                                    <td class="p-4 font-bold text-slate-900">{{ number_format($booking->grand_total, 2, '.', '') }}</td>
                                    <td class="p-4 text-xs font-bold text-slate-400">{{ $booking->currency }}</td>
                                    
                                    <td class="p-4">
                                        <form action="{{ route('dashboard.updateStatus', $booking->id) }}" method="POST" class="inline-block w-full">
                                            @csrf
                                            @method('PATCH')
                                            <select name="status" 
                                                    onchange="this.form.submit()" 
                                                    class="w-full py-1.5 px-2.5 text-xs font-semibold rounded-lg border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 
                                                    @if($booking->status === 'confirmed') bg-emerald-50 text-emerald-700 border-emerald-200
                                                    @elseif($booking->status === 'cancelled') bg-rose-50 text-rose-700 border-rose-200
                                                    @else bg-amber-50 text-amber-700 border-amber-200 @endif">
                                                <option value="pending" {{ $booking->status === 'pending' ? 'selected' : '' }}>pending</option>
                                                <option value="confirmed" {{ $booking->status === 'confirmed' ? 'selected' : '' }}>confirmed</option>
                                                <option value="cancelled" {{ $booking->status === 'cancelled' ? 'selected' : '' }}>cancelled</option>
                                            </select>
                                        </form>
                                    </td>
                                                                                    
                                    <td class="p-4 max-w-xs truncate" title="{{ $booking->notes }}">{{ $booking->notes ?? '-' }}</td>
                                    <td class="p-4 text-xs text-slate-400">{{ $booking->created_at ? $booking->created_at->format('Y-m-d H:i:s') : '-' }}</td>
                                    <td class="p-4 text-xs text-slate-400">{{ $booking->updated_at ? $booking->updated_at->format('Y-m-d H:i:s') : '-' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="18" class="p-12 text-center text-slate-400 italic">
                                        Belum ada data yang cocok dengan pencarian Anda.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>