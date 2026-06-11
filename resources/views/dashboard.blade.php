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
                    <h3 class="font-bold text-lg text-slate-800">Data Pemesanan Venue BJSM</h3>
                    <form action="{{ route('dashboard') }}" method="GET" class="flex items-center gap-2">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari..." class="px-4 py-2 text-sm rounded-xl border-slate-200 bg-slate-50">
                        <button type="submit" class="px-4 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-xl">Cari</button>
                    </form>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse"> 
                        <thead>
                            <tr class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider border-b border-slate-100">
                                <th class="p-4">ID</th>
                                <th class="p-4">Customer</th>
                                <th class="p-4">Event</th>
                                <th class="p-4">Package</th>
                                <th class="p-4">Metode</th>
                                <th class="p-4">Pax</th>
                                <th class="p-4">Total</th> 
                                <th class="p-4">Status</th>
                                <th class="p-4">Invoice</th> 
                                <th class="p-4 text-center">PDF</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-slate-600 divide-y divide-slate-100">
                            @forelse($recentBookings as $booking)
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="p-4 font-semibold text-slate-900">#{{ $booking->id }}</td>
                                    <td class="p-4 font-medium">{{ $booking->customer_name }}</td>
                                    <td class="p-4 text-indigo-600">{{ $booking->event_title }}</td>
                                    <td class="p-4">{{ $booking->venue_package }}</td>
                                    <td class="p-4">{{ $booking->payment_method }}</td>
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
                                        <a href="{{ route('dashboard.downloadPdf', $booking->id) }}" class="text-indigo-600 hover:underline">PDF</a>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="10" class="p-12 text-center text-slate-400">Data tidak ditemukan.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="p-4 border-t border-slate-100">{{ $recentBookings->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>