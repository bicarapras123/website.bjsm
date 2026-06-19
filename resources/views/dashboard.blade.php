<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">{{ __('Data Booking Venue') }}</h2>
            <p class="text-sm text-slate-400 mt-1">Pantau performa dan ringkasan data sistem Anda di sini.</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4">
                <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm"><p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Users</p><h4 class="text-xl font-black text-slate-800">{{ number_format($totalUsers) }}</h4></div>
                <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm"><p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Bookings</p><h4 class="text-xl font-black text-slate-800">{{ number_format($totalBookings) }}</h4></div>
                <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm"><p class="text-[10px] font-bold text-amber-500 uppercase tracking-wider">Pending</p><h4 class="text-xl font-black text-amber-600">{{ number_format($totalPending) }}</h4></div>
                <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm"><p class="text-[10px] font-bold text-emerald-500 uppercase tracking-wider">Confirmed</p><h4 class="text-xl font-black text-emerald-600">{{ number_format($totalConfirmed) }}</h4></div>
                <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm"><p class="text-[10px] font-bold text-rose-500 uppercase tracking-wider">Cancelled</p><h4 class="text-xl font-black text-rose-600">{{ number_format($totalCancelled) }}</h4></div>
                <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm"><p class="text-[10px] font-bold text-sky-500 uppercase tracking-wider">Paid</p><h4 class="text-xl font-black text-sky-600">{{ number_format($totalPaid) }}</h4></div>
                <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm col-span-2 lg:col-span-1">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Revenue</p>
                    <h4 class="text-sm font-black text-emerald-600 mt-0.5">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</h4>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <h3 class="font-bold text-lg text-slate-800">Daftar Reservasi</h3>
                    <form action="{{ route('dashboard') }}" method="GET" class="flex gap-2">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari kode, nama..." class="px-4 py-2 text-sm rounded-xl border-slate-200 bg-slate-50 focus:ring-2 focus:ring-indigo-500 outline-none">
                        <button type="submit" class="px-4 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-xl hover:bg-indigo-700">Cari</button>
                    </form>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse"> 
                        <thead>
                            <tr class="bg-slate-50 text-slate-400 text-[10px] font-bold uppercase tracking-widest">
                                <th class="p-4">Kode</th> <th class="p-4">Customer</th> <th class="p-4">Event</th>
                                <th class="p-4">Pkg</th> <th class="p-4">Mtd</th> <th class="p-4">Total</th>
                                <th class="p-4">Catatan</th> <th class="p-4">Status</th> <th class="p-4">Payment</th> <th class="p-4 text-center">PDF</th> <th class="p-4 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-slate-600 divide-y divide-slate-100">
                            @forelse($recentBookings as $booking)
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="p-4 font-black text-indigo-600">{{ $booking->booking_code }}</td>
                                    <td class="p-4 font-medium">{{ $booking->customer_name }}</td>
                                    <td class="p-4 text-slate-900">{{ $booking->event_title }}</td>
                                    <td class="p-4">{{ $booking->venue_package }}</td>
                                    <td class="p-4">{{ $booking->payment_method }}</td>
                                    <td class="p-4 font-bold text-slate-900">Rp {{ number_format($booking->grand_total, 0, ',', '.') }}</td>
                                    <td class="p-4 max-w-[120px] truncate" title="{{ $booking->notes }}">{{ $booking->notes ?? '-' }}</td>
                                    <td class="p-4">
                                        <form action="{{ route('dashboard.updateStatus', $booking->id) }}" method="POST">
                                            @csrf @method('PATCH')
                                            <select name="status" onchange="this.form.submit()" class="text-xs font-bold rounded-lg border-slate-200 cursor-pointer">
                                                <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td class="p-4">
                                        @if($booking->payment_status == 'paid')
                                            <span class="px-2 py-1 text-[10px] font-bold rounded-full bg-emerald-100 text-emerald-700 uppercase">Paid</span>
                                        @else
                                            <span class="px-2 py-1 text-[10px] font-bold rounded-full bg-rose-100 text-rose-700 uppercase">Unpaid</span>
                                        @endif
                                    </td>
                                    <td class="p-4 text-center">
                                        <a href="{{ route('dashboard.downloadPdf', $booking->id) }}" class="text-indigo-500 hover:text-indigo-700 transition">
                                            <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                        </a>
                                    </td>
                                    <td class="p-4 text-center">
                                        <form action="{{ route('dashboard.destroy', $booking->id) }}" method="POST" id="delete-{{ $booking->id }}">
                                            @csrf @method('DELETE')
                                            <button type="button" onclick="confirmDelete('{{ $booking->id }}')" class="text-rose-500 hover:text-rose-700 transition">
                                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="11" class="p-8 text-center text-slate-400">Data belum ada.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="p-4">
                        {{ $recentBookings->links('pagination::simple-tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Hapus Reservasi?',
                text: "Tindakan ini tidak dapat dibatalkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f43f5e',
                cancelButtonColor: '#94a3b8',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-' + id).submit();
                }
            })
        }
    </script>
</x-app-layout>