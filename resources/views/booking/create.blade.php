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

                    <!-- SECTION 3: PAKET BARU (@250rb) & CUSTOM NOTES SYSTEM -->
                    <div class="space-y-4 pt-4">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 border-b border-white/10 pb-2 font-luxury-title">
                            03. Pemilihan Paket & Tata Letak Ruang
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            
                            <!-- Dropdown Paket Dinamis Selaras List Baru -->
                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Pilihan Kategori Paket</label>
                                <select name="venue_package" id="venue_package" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-bold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition">
                                    <option value="" disabled selected class="text-slate-400">-- Pilih Kategori Paket --</option>
                                    <option value="Paket Small Meeting" {{ old('venue_package') == 'Paket Small Meeting' ? 'selected' : '' }}>Paket Small Meeting (Rp 250.000 / Pax)</option>
                                    <option value="Paket Half Day Meeting" {{ old('venue_package') == 'Paket Half Day Meeting' ? 'selected' : '' }}>Paket Half Day Meeting (Rp 250.000 / Pax)</option>
                                    <option value="Paket Full Day Meeting" {{ old('venue_package') == 'Paket Full Day Meeting' ? 'selected' : '' }}>Paket Full Day Meeting (Rp 250.000 / Pax)</option>
                                    <option value="Paket Fullboard Meeting" {{ old('venue_package') == 'Paket Fullboard Meeting' ? 'selected' : '' }}>Paket Fullboard Meeting (Rp 250.000 / Pax)</option>
                                    <option value="Paket Convention Centre (Custom)" {{ old('venue_package') == 'Paket Convention Centre (Custom)' ? 'selected' : '' }}>Paket Convention Centre (Custom / Kontak Admin)</option>
                                </select>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Jumlah Tamu / Pax</label>
                                <input type="number" name="total_pax" value="{{ old('total_pax') }}" min="1" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition placeholder-slate-400" placeholder="Jumlah Orang">
                            </div>

                            <!-- Dropdown Susunan Layout Standar & Custom -->
                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Susunan Kursi (Layout)</label>
                                <select name="room_layout" id="room_layout" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-bold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition">
                                    <option value="" disabled selected class="text-slate-400">-- Pilih Layout Meja/Kursi --</option>
                                    <option value="Standar" {{ old('room_layout') == 'Standar' ? 'selected' : '' }}>Standar Layout</option>
                                    <option value="Custom Layout (Tulis di Note)" {{ old('room_layout') == 'Custom Layout (Tulis di Note)' ? 'selected' : '' }}>Custom Layout (Wajib tulis di note bawah)</option>
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
        const layoutSelect = document.getElementById('room_layout');
        const notesTextarea = document.getElementById('notes');

        function checkCustomOptions() {
            const isCustomPackage = packageSelect.value.includes('(Custom)');
            const isCustomLayout = layoutSelect.value.includes('Custom');

            if (isCustomPackage || isCustomLayout) {
                notesTextarea.style.borderColor = '#fbbf24'; // Ubah border jadi kuning amber sebagai penanda wajib isi
                notesTextarea.placeholder = "⚠️ Anda memilih opsi CUSTOM. Harap rincikan secara spesifik detail susunan layout atau kebutuhan khusus paket meeting Anda di sini agar tim sales kami bisa segera memprosesnya...";
            } else {
                notesTextarea.style.borderColor = '#334155'; // Kembalikan ke border standar
                notesTextarea.placeholder = "Tulis instruksi khusus operasional hospitality di sini...";
            }
        }

        packageSelect.addEventListener('change', checkCustomOptions);
        layoutSelect.addEventListener('change', checkCustomOptions);
    </script>

</body>
</html>