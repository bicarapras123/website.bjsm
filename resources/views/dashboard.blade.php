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
                    <h3 class="font-bold text-xl sm:text-2xl">Selamat Datang kembali, {{ Auth::user()->name }}! 👋</h3>
                    <p class="text-indigo-100 text-sm mt-1.5 max-w-xl">
                        Sistem mendeteksi aktivitas berjalan dengan lancar. Anda masuk sebagai <span class="font-semibold underline">Administrator</span>.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-7 gap-4">
                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm"><p class="text-xs font-semibold text-slate-400 uppercase">Total Pengguna</p><h4 class="text-2xl font-bold text-slate-800 mt-1">{{ number_format($totalUsers) }}</h4></div>
                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm"><p class="text-xs font-semibold text-slate-400 uppercase">Total Booking</p><h4 class="text-2xl font-bold text-slate-800 mt-1">{{ number_format($totalBookings) }}</h4></div>
                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm"><p class="text-xs font-semibold text-slate-400 uppercase">Pending</p><h4 class="text-2xl font-bold text-amber-600 mt-1">{{ number_format($totalPending) }}</h4></div>
                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm"><p class="text-xs font-semibold text-slate-400 uppercase">Confirmed</p><h4 class="text-2xl font-bold text-emerald-600 mt-1">{{ number_format($totalConfirmed) }}</h4></div>
                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm"><p class="text-xs font-semibold text-slate-400 uppercase">Cancelled</p><h4 class="text-2xl font-bold text-rose-600 mt-1">{{ number_format($totalCancelled) }}</h4></div>
                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm"><p class="text-xs font-semibold text-slate-400 uppercase">Sudah Dibayar</p><h4 class="text-2xl font-bold text-emerald-600 mt-1">{{ number_format($totalPaid) }}</h4></div>
                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm">
                    <p class="text-xs font-semibold text-slate-400 uppercase">Revenue</p>
                    <h4 class="text-lg font-bold text-emerald-600 mt-1">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</h4>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h3 class="font-bold text-lg text-slate-800">Data Pemesanan Venue BJSM</h3>
                    </div>
                    <form action="{{ route('dashboard') }}" method="GET" class="flex items-center gap-2">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari..." class="px-4 py-2 text-sm rounded-xl border-slate-200 bg-slate-50">
                        <button type="submit" class="px-4 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-xl">Cari</button>
                    </form>
                </div>
                
                <div class="overflow-x-auto separation-scroll">
                    <table class="w-full text-left border-collapse min-w-[1700px]"> 
                        <thead>
                            <tr class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider border-b border-slate-100">
                                <th class="p-4">ID</th>
                                <th class="p-4">Customer</th>
                                <th class="p-4">Event</th>
                                <th class="p-4">Package</th>
                                <th class="p-4">Pax</th>
                                <th class="p-4">Grand Total</th> 
                                <th class="p-4">Status</th>
                                <th class="p-4">Payment</th> <th class="p-4 text-center">PDF</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-slate-600 divide-y divide-slate-100 whitespace-nowrap">
                            @forelse($recentBookings as $booking)
                                <tr class="hover:bg-slate-50">
                                    <td class="p-4 font-semibold">#{{ $booking->id }}</td>
                                    <td class="p-4 font-medium text-slate-900">{{ $booking->customer_name }}</td>
                                    <td class="p-4 text-indigo-600">{{ $booking->event_title }}</td>
                                    <td class="p-4">{{ $booking->venue_package }}</td>
                                    <td class="p-4">{{ number_format($booking->total_pax) }}</td>
                                    <td class="p-4 font-bold text-emerald-600">Rp {{ number_format($booking->grand_total, 0, ',', '.') }}</td>
                                    <td class="p-4">
                                        <form action="{{ route('dashboard.updateStatus', $booking->id) }}" method="POST">
                                            @csrf @method('PATCH')
                                            <select name="status" onchange="this.form.submit()" class="text-xs font-semibold rounded-lg border-slate-200">
                                                <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td class="p-4">
                                        @if($booking->payment_status == 'paid')
                                            <span class="px-2 py-1 bg-emerald-100 text-emerald-700 text-xs font-bold rounded-lg uppercase">Paid</span>
                                        @else
                                            <span class="px-2 py-1 bg-rose-100 text-rose-700 text-xs font-bold rounded-lg uppercase">Unpaid</span>
                                        @endif
                                    </td>
                                    <td class="p-4 text-center">
                                        <a href="{{ route('dashboard.downloadPdf', $booking->id) }}" class="text-indigo-600">PDF</a>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="9" class="p-12 text-center">Data tidak ditemukan.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="p-4 border-t">{{ $recentBookings->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>