<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Input Pemesanan Venue Baru') }}
            </h2>
            <p class="text-sm text-slate-400 mt-1">Cari data kustomer lama untuk mengisi form secara instan.</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            @if(session('success'))
                <div class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-2xl text-sm font-semibold flex items-center gap-2.5 shadow-sm shadow-emerald-50">
                    <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-100 shadow-sm">
                <form action="{{ route('venue.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        
                        <div class="bg-slate-50/50 p-5 rounded-2xl border border-slate-100/80 space-y-4">
                            <div class="flex items-center gap-2 pb-2 border-b border-slate-100">
                                <span class="p-1.5 bg-indigo-50 text-indigo-600 rounded-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                </span>
                                <h3 class="text-xs font-bold text-slate-700 uppercase tracking-wider">Data Pelanggan</h3>
                            </div>
                            
                            <div class="relative">
                                <label class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Nama Customer</label>
                                <div class="relative mt-1">
                                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                    </div>
                                    <input type="text" id="customer_name" name="customer_name" autocomplete="off" required
                                           placeholder="Ketik nama untuk cari data lama..."
                                           class="block w-full pl-10 pr-4 py-2.5 text-sm rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 text-slate-700 bg-white placeholder-slate-400 shadow-sm">
                                </div>
                                <div id="search-results" class="absolute z-50 left-0 right-0 mt-1.5 bg-white border border-slate-100 rounded-xl shadow-xl hidden overflow-hidden divide-y divide-slate-100 max-h-60 overflow-y-auto"></div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Email Customer</label>
                                    <div class="relative mt-1">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                        </div>
                                        <input type="email" id="customer_email" name="customer_email" required placeholder="customer@example.com"
                                               class="block w-full pl-10 pr-4 py-2.5 text-sm rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 text-slate-700 bg-white shadow-sm">
                                    </div>
                                </div>
                                <div>
                                    <label class="text-xs font-semibold text-slate-500 uppercase tracking-wider">No. Telepon</label>
                                    <div class="relative mt-1">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                        </div>
                                        <input type="text" id="customer_phone" name="customer_phone" required placeholder="08xxxxxxxxxx"
                                               class="block w-full pl-10 pr-4 py-2.5 text-sm rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 text-slate-700 bg-white shadow-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center gap-2 pb-2 border-b border-slate-100">
                                <span class="p-1.5 bg-violet-50 text-violet-600 rounded-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                                </span>
                                <h3 class="text-xs font-bold text-slate-700 uppercase tracking-wider">Rincian Sewa Venue</h3>
                            </div>
                            
                            <div>
                                <label class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Nama Ruangan / Venue</label>
                                <input type="text" name="venue_name" placeholder="Contoh: Luxury Grand Ballroom" required
                                       class="mt-1 block w-full px-4 py-2.5 text-sm rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 text-slate-700 shadow-sm">
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div>
                                    <label class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Tanggal Acara</label>
                                    <input type="date" name="event_date" required
                                           class="mt-1 block w-full px-4 py-2.5 text-sm rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 text-slate-700 shadow-sm">
                                </div>
                                <div>
                                    <label class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Jam Mulai</label>
                                    <input type="time" name="start_time" required
                                           class="mt-1 block w-full px-4 py-2.5 text-sm rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 text-slate-700 shadow-sm">
                                </div>
                                <div>
                                    <label class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Jam Selesai</label>
                                    <input type="time" name="end_time" required
                                           class="mt-1 block w-full px-4 py-2.5 text-sm rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 text-slate-700 shadow-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2">
                        <label class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Catatan Tambahan (Opsional)</label>
                        <textarea name="notes" rows="2" placeholder="Tambahkan instruksi khusus atau catatan layout fasilitas di sini..."
                                  class="mt-1 block w-full px-4 py-2.5 text-sm rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 text-slate-700 shadow-sm placeholder-slate-400"></textarea>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex justify-end">
                        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-violet-700 text-white font-bold text-xs uppercase tracking-wider rounded-xl hover:from-indigo-700 hover:to-violet-800 transition active:scale-[0.98] duration-150 shadow-md shadow-indigo-100">
                            Simpan Booking & Kirim Email
                        </button>
                    </div>
                </form>
            </div>

            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="p-5 border-b border-slate-100 bg-slate-50/50">
                    <h3 class="font-bold text-base text-slate-800">Riwayat Pengisian Database Terbaru</h3>
                    <p class="text-xs text-slate-400 mt-0.5">Daftar pemesanan log ringkas yang sudah tersimpan di dalam sistem.</p>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[1000px]">
                        <thead>
                            <tr class="bg-slate-50 text-slate-500 text-[11px] font-bold uppercase tracking-wider border-b border-slate-100 whitespace-nowrap">
                                <th class="p-4">ID</th>
                                <th class="p-4">Nama Pelanggan</th>
                                <th class="p-4">Customer Email</th>
                                <th class="p-4">No. Telp</th>
                                <th class="p-4">Venue / Ruangan</th>
                                <th class="p-4">Tanggal Acara</th>
                                <th class="p-4">Waktu Sewa</th>
                                <th class="p-4">Catatan</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-slate-600 divide-y divide-slate-100 whitespace-nowrap">
                            @forelse($venueBookings as $vBooking)
                                <tr class="hover:bg-slate-50/50 transition-colors">
                                    <td class="p-4 font-semibold text-slate-800">#{{ $vBooking->id }}</td>
                                    <td class="p-4 font-medium text-slate-900">{{ $vBooking->customer_name }}</td>
                                    <td class="p-4 id_check">{{ $vBooking->customer_email }}</td>
                                    <td class="p-4 text-xs text-slate-500">{{ $vBooking->customer_phone }}</td>
                                    <td class="p-4">
                                        <span class="px-2.5 py-1 text-xs font-semibold bg-violet-50 text-violet-700 rounded-md">
                                            {{ $vBooking->venue_name }}
                                        </span>
                                    </td>
                                    <td class="p-4 font-medium text-slate-700">
                                        {{ \Carbon\Carbon::parse($vBooking->event_date)->format('Y-m-d') }}
                                    </td>
                                    <td class="p-4 text-xs font-medium text-slate-600">
                                        {{ \Carbon\Carbon::parse($vBooking->start_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($vBooking->end_time)->format('H:i') }} WIB
                                    </td>
                                    <td class="p-4 max-w-xs truncate text-xs text-slate-400" title="{{ $vBooking->notes }}">{{ $vBooking->notes ?? '-' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="p-12 text-center text-slate-400 italic">
                                        Belum ada data pemesanan venue baru yang tercatat.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script>
        const nameInput = document.getElementById('customer_name');
        const resultsDiv = document.getElementById('search-results');
        const emailInput = document.getElementById('customer_email');
        const phoneInput = document.getElementById('customer_phone');

        nameInput.addEventListener('input', function() {
            let query = this.value;
            if (query.length < 2) {
                resultsDiv.classList.add('hidden');
                return;
            }

            fetch(`{{ route('venue.searchCustomer') }}?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    resultsDiv.innerHTML = '';
                    if (data.length > 0) {
                        resultsDiv.classList.remove('hidden');
                        data.forEach(customer => {
                            let item = document.createElement('div');
                            item.className = 'p-3 hover:bg-slate-50 cursor-pointer text-sm transition-colors flex flex-col gap-0.5';
                            item.innerHTML = `
                                <p class="font-semibold text-slate-800">${customer.customer_name}</p>
                                <p class="text-xs text-slate-400 flex items-center gap-2">
                                    <span>${customer.customer_email}</span>
                                    <span class="text-slate-300">•</span>
                                    <span>${customer.customer_phone}</span>
                                </p>
                            `;
                            
                            item.addEventListener('click', function() {
                                nameInput.value = customer.customer_name;
                                emailInput.value = customer.customer_email;
                                phoneInput.value = customer.customer_phone;
                                resultsDiv.classList.add('hidden');
                            });
                            resultsDiv.appendChild(item);
                        });
                    } else {
                        resultsDiv.classList.add('hidden');
                    }
                });
        });

        document.addEventListener('click', function(e) {
            if (!nameInput.contains(e.target) && !resultsDiv.contains(e.target)) {
                resultsDiv.classList.add('hidden');
            }
        });
    </script>
</x-app-layout>