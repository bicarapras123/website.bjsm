<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bjsm Venue - Premium Reservation Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;900&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .font-luxury-title { font-family: 'Cinzel', serif; }
        .font-luxury-body { font-family: 'Montserrat', sans-serif; }
        
        /* Reset paksa browser agar teks input date, time, dan select tidak pudar */
        input[type="date"], input[type="time"], select {
            color: #0f172a !important; /* slate-900 */
            font-weight: 600 !important;
        }
    </style>
</head>
<body class="antialiased font-luxury-body selection:bg-emerald-600 selection:text-white bg-slate-950 text-slate-100">

    <div class="min-h-screen flex flex-col justify-between">

        @include('components.navbar')

        <main class="max-w-4xl mx-auto w-full px-4 sm:px-6 lg:px-8 pt-36 pb-24 relative z-10">
            
            <div class="text-center mb-12">
                <span class="text-amber-400 font-bold text-[10px] sm:text-xs tracking-[0.3em] uppercase mb-3 bg-amber-400/5 inline-block px-6 py-2 rounded-full border border-amber-400/20 backdrop-blur-sm">
                    Secured Booking Form
                </span>
                <h1 class="text-2xl sm:text-4xl font-black text-white tracking-wide uppercase font-luxury-title mt-3">
                    Formulir Reservasi <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-500">Venue</span>
                </h1>
                <p class="mt-3 text-xs sm:text-sm text-slate-400 font-light">
                    Silakan lengkapi detail data penting di bawah ini. Semua kolom input dibuat kontras tinggi agar pengisian nyaman.
                </p>
            </div>

            <div class="bg-slate-900/80 border border-white/10 rounded-2xl shadow-2xl p-6 sm:p-10 backdrop-blur-md">
                
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-500/10 border border-red-500/20 rounded-xl text-red-400 text-xs sm:text-sm">
                        <p class="font-bold mb-1">Mohon periksa kembali inputan Anda:</p>
                        <ul class="list-disc list-inside space-y-0.5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('booking.store') }}" method="POST" class="space-y-8">
                    @csrf

                    <!-- SECTION 1: INFORMASI PIC -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 border-b border-white/10 pb-2 font-luxury-title">
                            01. Informasi Kontak Pemesan
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Nama Lengkap PIC</label>
                                <input type="text" name="customer_name" value="{{ old('customer_name') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition placeholder-slate-400" placeholder="Contoh: Andi Pratama">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Nomor WhatsApp / HP</label>
                                <input type="text" name="customer_phone" value="{{ old('customer_phone') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition placeholder-slate-400" placeholder="Contoh: 081234567xxx">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Alamat Email Resmi</label>
                                <input type="email" name="customer_email" value="{{ old('customer_email') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition placeholder-slate-400" placeholder="alamat@email.com">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Nama Perusahaan / Organisasi <span class="text-[10px] text-slate-400 lowercase font-normal">(opsional)</span></label>
                                <input type="text" name="company_or_organization" value="{{ old('company_or_organization') }}" class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition placeholder-slate-400" placeholder="Nama Instansi atau Perusahaan">
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 2: WAKTU ACARA -->
                    <div class="space-y-4 pt-4">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 border-b border-white/10 pb-2 font-luxury-title">
                            02. Detail & Penjadwalan Acara
                        </h3>
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Judul / Nama Agenda Acara</label>
                            <input type="text" name="event_title" value="{{ old('event_title') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition placeholder-slate-400" placeholder="Contoh: Annual Grand Conference 2026">
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Tanggal Acara</label>
                                <input type="date" name="event_date" value="{{ old('event_date') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Jam Mulai</label>
                                <input type="time" name="start_time" value="{{ old('start_time') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Jam Selesai</label>
                                <input type="time" name="end_time" value="{{ old('end_time') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition">
                            </div>
                        </div>
                    </div>

                <!-- SECTION 3: PAKET KELIPATAN 5JT -->
                <div class="space-y-4 pt-4">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 border-b border-white/10 pb-2 font-luxury-title">
                        03. Pemilihan Paket & Tata Letak Ruang
                    </h3>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Pilihan Kategori Paket</label>
                            <select name="venue_package" id="venue_package" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-bold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition">
                                <option value="" disabled selected>-- Pilih Paket Meeting --</option>
                                <option value="Paket Small Meeting">Paket Small Meeting (Rp 5.000.000)</option>
                                <option value="Paket Half Day Meeting">Paket Half Day Meeting (Rp 10.000.000)</option>
                                <option value="Paket Full Day Meeting">Paket Full Day Meeting (Rp 15.000.000)</option>
                                <option value="Paket Fullboard Meeting">Paket Fullboard Meeting (Rp 20.000.000)</option>
                                <option value="Paket Convention Centre">Paket Convention Centre (Custom / Hubungi Admin)</option>
                            </select>
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Jumlah Tamu / Pax</label>
                            <input type="number" name="total_pax" id="total_pax" min="1" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition" placeholder="Contoh: 100">
                        </div>
                    </div>

                    <!-- TAMPILAN ESTIMASI HARGA -->
                    <div id="price_display" class="bg-amber-500/10 border border-amber-500/20 rounded-xl p-4 text-center hidden">
                        <p class="text-amber-400 text-xs font-bold uppercase tracking-widest">Estimasi Total Investasi</p>
                        <h4 id="total_price_text" class="text-2xl font-black text-white mt-1">Rp 0</h4>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Susunan Kursi (Layout)</label>
                        <select name="room_layout" id="room_layout" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-bold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition">
                            <option value="Standar">Standar Layout</option>
                            <option value="Custom Layout">Custom Layout (Wajib tulis di note bawah)</option>
                        </select>
                    </div>
                </div>
                            
                        <!-- Textarea Khusus Dilengkapi Informasi Dinamis -->
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">
                                Catatan Tambahan Khusus <span class="text-[10px] text-slate-400 lowercase font-normal">(opsional)</span>
                            </label>
                            <textarea name="notes" id="notes" rows="3" class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition placeholder-slate-400" placeholder="Tulis instruksi khusus operasional hospitality atau detail spesifikasi paket custom Anda di sini..."></textarea>
                        </div>
                    </div>

                    <!-- SUBMIT BUTTON -->
                    <div class="pt-6 w-full flex flex-row items-center justify-center border-t border-white/5">
                        <button type="submit" class="w-full sm:w-auto text-center bg-gradient-to-r from-amber-500 via-amber-400 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-black px-14 py-4 rounded-xl text-xs uppercase tracking-[0.2em] transition-all duration-300 shadow-xl shadow-amber-500/10 hover:shadow-amber-500/20 transform hover:-translate-y-0.5 box-border">
                            Kirim Formulir Reservasi
                        </button>
                    </div>

                </form>
            </div>
        </main>

        @include('components.footer')

    </div>

    <!-- Sistem Pendeteksi Otomatis Opsi Custom -->
            <script>
            const packageSelect = document.getElementById('venue_package');
            const paxInput = document.getElementById('total_pax');
            const priceDisplay = document.getElementById('price_display');
            const priceText = document.getElementById('total_price_text');

            function calculatePrice() {
                const packageValue = packageSelect.value;
                const pax = parseInt(paxInput.value) || 0;
                let basePrice = 0;

                // Logika harga berdasarkan daftar paket baru
                if (packageValue === 'Paket Small Meeting') basePrice = 5000000;
                else if (packageValue === 'Paket Half Day Meeting') basePrice = 10000000;
                else if (packageValue === 'Paket Full Day Meeting') basePrice = 15000000;
                else if (packageValue === 'Paket Fullboard Meeting') basePrice = 20000000;

                // Jika pilih Custom, harga tidak ditampilkan sebagai angka
                if (packageValue === 'Paket Convention Centre (Custom)') {
                    priceDisplay.classList.add('hidden');
                } else if (pax > 0 && basePrice > 0) {
                    priceDisplay.classList.remove('hidden');
                    priceText.innerText = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(basePrice);
                } else {
                    priceDisplay.classList.add('hidden');
                }
            }

            packageSelect.addEventListener('change', calculatePrice);
            paxInput.addEventListener('input', calculatePrice);
        </script>

</body>
</html>