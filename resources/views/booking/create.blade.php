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
        input[type="date"], input[type="time"], select { color: #0f172a !important; font-weight: 600 !important; }
        .method-disabled { opacity: 0.5; filter: grayscale(1); cursor: not-allowed; }
    </style>
</head>
<body class="antialiased font-luxury-body selection:bg-emerald-600 selection:text-white bg-slate-950 text-slate-100">

    <div class="min-h-screen flex flex-col justify-between">
        @include('components.navbar')

        <main class="max-w-4xl mx-auto w-full px-4 sm:px-6 lg:px-8 pt-36 pb-24 relative z-10">
            <div class="text-center mb-12">
                <span class="text-amber-400 font-bold text-[10px] sm:text-xs tracking-[0.3em] uppercase mb-3 bg-amber-400/5 inline-block px-6 py-2 rounded-full border border-amber-400/20 backdrop-blur-sm">Secured Booking Form</span>
                <h1 class="text-2xl sm:text-4xl font-black text-white tracking-wide uppercase font-luxury-title mt-3">Formulir Reservasi <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-500">Venue</span></h1>
            </div>

            <div class="bg-slate-900/80 border border-white/10 rounded-2xl shadow-2xl p-6 sm:p-10 backdrop-blur-md">
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-500/10 border border-red-500/20 rounded-xl text-red-400 text-xs sm:text-sm">
                        <p class="font-bold mb-1">Mohon periksa kembali inputan Anda:</p>
                        <ul class="list-disc list-inside space-y-0.5">
                            @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('booking.store') }}" method="POST" class="space-y-8" id="reservationForm">
                    @csrf
                    <input type="hidden" name="payment_method" id="payment_method">

                    <div class="space-y-4">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 border-b border-white/10 pb-2 font-luxury-title">01. Informasi Kontak Pemesan</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Nama Lengkap PIC</label><input type="text" name="customer_name" value="{{ old('customer_name') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Nomor WhatsApp / HP</label><input type="text" name="customer_phone" value="{{ old('customer_phone') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Alamat Email Resmi</label><input type="email" name="customer_email" value="{{ old('customer_email') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Nama Perusahaan/Organisasi</label><input type="text" name="company_or_organization" value="{{ old('company_or_organization') }}" class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                        </div>
                    </div>

                    <div class="space-y-4 pt-4">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 border-b border-white/10 pb-2 font-luxury-title">02. Detail & Penjadwalan Acara</h3>
                        <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Judul / Nama Agenda Acara</label><input type="text" name="event_title" value="{{ old('event_title') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Tanggal Acara</label><input type="date" name="event_date" value="{{ old('event_date') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Jam Mulai</label><input type="time" name="start_time" value="{{ old('start_time') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Jam Selesai</label><input type="time" name="end_time" value="{{ old('end_time') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                        </div>
                    </div>

                    <div class="space-y-4 pt-4">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 border-b border-white/10 pb-2 font-luxury-title">03. Pemilihan Paket & Tata Letak Ruang</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Pilihan Kategori Paket</label>
                                <select name="venue_package" id="venue_package" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-bold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition">
                                <option value="Paket Small Meeting">Paket Small Meeting (Rp 5.000.000)</option>
                                <option value="Paket Half Day Meeting">Paket Half Day Meeting (Rp 10.000.000)</option>
                                <option value="Paket Full Day Meeting">Paket Full Day Meeting (Rp 15.000.000)</option>
                                <option value="Paket Fullboard Meeting">Paket Fullboard Meeting (Rp 20.000.000)</option>
                                <option value="Paket Executive Meeting">Paket Executive Meeting (Rp 25.000.000)</option>
                                <option value="Paket Premium Meeting">Paket Premium Meeting (Rp 30.000.000)</option>
                                <option value="Paket Corporate Meeting">Paket Corporate Meeting (Rp 35.000.000)</option>
                                <option value="Paket Grand Ballroom">Paket Grand Ballroom (Rp 40.000.000)</option>
                                <option value="Paket Convention Centre">Paket Convention Centre (Rp 45.000.000)</option>
                                <option value="Paket Luxury Convention">Paket Luxury Convention (Rp 50.000.000)</option>
                                <option value="Paket Custom">Paket Custom (> Rp 50.000.000)</option>
                                </select>
                            </div>
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Jumlah Tamu / Pax</label><input type="number" name="total_pax" id="total_pax" min="1" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                        </div>
                        <div id="price_display" class="bg-amber-500/10 border border-amber-500/20 rounded-xl p-4 text-center hidden"><p class="text-amber-400 text-xs font-bold uppercase tracking-widest">Harga Paket</p><h4 id="total_price_text" class="text-2xl font-black text-white mt-1">Rp 0</h4></div>
                        <div id="custom_price_wrapper" class="space-y-1.5 hidden mt-4">
                            <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">
                                Nominal Paket Custom
                            </label>
                            <input
                            type="text"
                            id="custom_price"
                            name="custom_price"
                            placeholder="Rp 50.000.001"
                            class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition">
                            </div>
                        <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Susunan Kursi (Layout)</label><select name="room_layout" id="room_layout" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-bold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"><option value="Standar">Standar</option><option value="Custom Layout">Custom</option></select></div>
                        <div id="custom_notes_wrapper" class="space-y-1.5 hidden"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Catatan Tambahan</label><textarea name="notes" id="notes_textarea" rows="3" class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm"></textarea></div>
                    </div>

                    <div class="pt-6 w-full flex justify-center border-t border-white/5">
                        <button type="button" onclick="openModal()" class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-black px-14 py-4 rounded-xl text-xs uppercase tracking-[0.2em] transition-all duration-300">
                            Kirim Formulir Reservasi
                        </button>
                    </div>
                </form>
            </div>
        </main>

        <div id="paymentModal" class="fixed inset-0 z-50 flex items-center justify-center bg-slate-950/80 backdrop-blur-sm hidden">
    <div class="bg-slate-900 border border-white/10 p-8 rounded-2xl max-w-sm w-full mx-4">
        <h3 class="text-xl font-black text-white text-center mb-6">
            Pilih Metode Pembayaran
        </h3>

        <div class="space-y-3">
            <div class="method-disabled w-full bg-slate-800 p-3 rounded-xl border border-white/5 flex justify-between items-center text-slate-400">
                QRIS <span>Soon</span>
            </div>

            <div class="method-disabled w-full bg-slate-800 p-3 rounded-xl border border-white/5 flex justify-between items-center text-slate-400">
                E-Wallet <span>Soon</span>
            </div>

            <button
                onclick="submitForm('Card Payment')"
                class="w-full bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 rounded-xl transition">
                Card Payment
            </button>
        </div>

        <button onclick="closeModal()" class="w-full mt-6 text-slate-500 text-sm">
            Batal
        </button>
    </div>
</div>

@include('components.footer')
    <!-- MODAL TERMS & CONDITIONS -->
    <div x-show="openTerms" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md"
         style="display: none;">
        
        <div @click.away="openTerms = false" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="bg-white text-slate-800 w-full max-w-3xl rounded-2xl shadow-2xl flex flex-col max-h-[85vh] border border-slate-200">
            

            <!-- MODAL TERMS & CONDITIONS -->
            <div x-show="openTerms" 
                        class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md">
                        
                        <div class="bg-white text-slate-800 w-full max-w-3xl rounded-2xl shadow-2xl flex flex-col max-h-[85vh] border border-slate-200">
                            
            <!-- Header -->
            <div class="p-6 border-b border-slate-200 bg-slate-50 rounded-t-2xl">
                
                <h3 class="text-slate-900 font-bold text-lg uppercase tracking-wider font-luxury-title">
                    Terms & Conditions
                </h3>

                <p class="text-[10px] text-slate-500 uppercase tracking-widest font-semibold mt-1">
                    Syarat & Ketentuan Sewa Gedung BJSM Venue
                </p>

            <!-- NEW NOTE -->
            <div class="mt-4">
                <div class="flex items-start gap-3 p-3 sm:p-4 rounded-xl border border-amber-200 bg-amber-50">
                    
                    <!-- Icon -->
                    <div class="mt-0.5 text-amber-600">
                        ⚠️
                    </div>

                    <!-- Text -->
                    <div class="text-[11px] sm:text-xs text-amber-800 leading-relaxed font-medium">
                        <span class="font-semibold uppercase tracking-wide">
                            Important Notice:
                        </span>
                        Seluruh pembayaran yang telah dilakukan, termasuk Down Payment maupun pelunasan,
                        <span class="font-semibold">
                            bersifat final dan tidak dapat dikembalikan (non-refundable)
                        </span>
                        dalam kondisi apapun.
                    </div>

                </div>
            </div>

            </div>

                <!-- Modal Content -->
                <div class="p-6 sm:p-8 overflow-y-auto space-y-6 text-xs sm:text-sm text-slate-600 font-light leading-relaxed">
                    <section class="space-y-2">
                        <h5 class="font-bold text-slate-900 uppercase tracking-wider">1. Definisi & Ketentuan Umum</h5>
                        <p>Perjanjian sewa ini berlaku sah antara pihak manajemen <strong>BJSM Venue</strong> (selanjutnya disebut "Pengelola") dan badan hukum atau perorangan yang melakukan pemesanan (selanjutnya disebut "Penyewa"). Dengan melakukan pembayaran uang muka, Penyewa dianggap telah membaca, memahami, dan menyetujui seluruh klausul ini.</p>
                    </section>
                    <section class="space-y-2">
                        <h5 class="font-bold text-slate-900 uppercase tracking-wider">2. Prosedur Reservasi & Pelunasan</h5>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Pemesanan tanggal (*booking*) baru dinyatakan mengikat secara sistem setelah Penyewa membayarkan Uang Muka (*Down Payment*) minimal sebesar <strong>30%</strong> dari total nilai kontrak sewa.</li>
                            <li>Pelunasan sisa pembayaran wajib diselesaikan selambat-lambatnya <strong>14 (empat belas) hari kerja</strong> sebelum hari pelaksanaan acara.</li>
                            <li>Apabila pelunasan tidak dipenuhi dalam batas waktu tersebut, Pengelola berhak membatalkan pesanan secara sepihak tanpa kewajiban mengembalikan dana yang telah masuk.</li>
                        </ul>
                    </section>
                    <section class="space-y-2">
                        <h5 class="font-bold text-slate-900 uppercase tracking-wider">3. Uang Jaminan Kerusakan (*Security Deposit*)</h5>
                        <p>Penyewa wajib menyetorkan *Security Deposit* (nilai disesuaikan dengan jenis paket/acara) bersamaan dengan pembayaran pelunasan. Uang jaminan ini akan dikembalikan secara penuh maksimal <strong>7 (tujuh) hari kerja</strong> setelah acara selesai, dengan catatan tidak ditemukan kerusakan asset atau pelanggaran aturan operasional oleh Penyewa maupun vendor terkait.</p>
                    </section>
                    <section class="space-y-2">
                        <h5 class="font-bold text-slate-900 uppercase tracking-wider">4. Pembatalan & Perubahan Jadwal (*Reschedule*)</h5>
                        <ul class="list-disc pl-5 space-y-1">
                            <li><strong>Pembatalan Sepihak:</strong> Jika pembatalan dilakukan dalam waktu kurang dari 30 hari sebelum acara, seluruh dana yang telah masuk dinyatakan hangus dan tidak dapat dikembalikan (*non-refundable*).</li>
                            <li><strong>Perubahan Jadwal (*Reschedule*):</strong> Pengajuan perubahan tanggal wajib disampaikan secara tertulis maksimal <strong>45 hari sebelum acara</strong>, dan bergantung sepenuhnya pada ketersediaan slot kosong. Perubahan jadwal dapat dikenakan biaya administrasi tambahan sesuai kebijakan manajemen.</li>
                        </ul>
                    </section>
                    <section class="space-y-2">
                        <h5 class="font-bold text-slate-900 uppercase tracking-wider">5. Durasi Penggunaan & Aturan Waktu</h5>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Waktu sewa standar adalah sesuai durasi paket yang dipilih (termasuk pelaksanaan acara).</li>
                            <li>Waktu untuk persiapan dekorasi (*loading*) dan pembongkaran (*unloading*) diatur secara khusus oleh pihak tim teknis gedung.</li>
                            <li>Kelebihan waktu (*overtime*) penggunaan ruangan akan dikenakan biaya tambahan per jam sesuai tarif premium yang berlaku.</li>
                        </ul>
                    </section>
                    <section class="space-y-2">
                        <h5 class="font-bold text-slate-900 uppercase tracking-wider">6. Kebijakan Vendor Luar Rekanan</h5>
                        <p>Pengelola memiliki daftar vendor rekanan resmi (katering, dekorasi, dokumentasi, sound/lighting). Apabila Penyewa menggunakan jasa vendor dari luar rekanan wajib:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Membayar biaya kompensasi operasional (*charge vendor luar*) sesuai klasifikasi tarif BJSM Venue.</li>
                            <li>Vendor luar wajib menghadiri *Technical Meeting* resmi dan mematuhi batas daya listrik serta regulasi pemasangan dekorasi yang ditetapkan teknisi gedung.</li>
                        </ul>
                    </section>
                    <section class="space-y-2">
                        <h5 class="font-bold text-slate-900 uppercase tracking-wider">7. Batasan Kapasitas & Ketertiban</h5>
                        <p>Jumlah tamu dan kru tidak boleh melebihi batas kapasitas maksimal aman ruangan yang telah disepakati untuk menjaga keselamatan bersama. Penyewa beserta pihak ketiga (vendor/tamu) dilarang keras membawa senjata api, senjata tajam, obat-obatan terlarang, serta melakukan aktivitas yang melanggar hukum RI di lingkungan BJSM Venue.</p>
                    </section>
                    <section class="space-y-2">
                        <h5 class="font-bold text-slate-900 uppercase tracking-wider">8. Tanggung Jawab & Force Majeure</h5>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Penyewa bertanggung jawab penuh atas hilangnya barang pribadi milik tamu undangan atau kru selama acara berlangsung.</li>
                            <li>Pihak BJSM Venue dibebaskan dari tuntutan hukum jika terjadi kegagalan atau penundaan acara yang disebabkan oleh keadaan darurat di luar kendali manusia (*Force Majeure*), termasuk namun tidak terbatas pada bencana alam, kebakaran, huru-hara, pemadaman listrik massal kota, atau kebijakan pembatasan resmi dari pemerintah.</li>
                        </ul>
                    </section>
                </div>

                <!-- Footer -->
                <div class="p-5 bg-slate-50 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4 rounded-b-2xl">
                    <label class="flex items-center space-x-3 cursor-pointer select-none w-full sm:w-auto">
                        <input type="checkbox" x-model="isAgreed" class="w-5 h-5 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500/30 accent-emerald-600 transition duration-150">
                        <span class="text-xs sm:text-sm text-slate-700 font-medium">Saya menyetujui seluruh syarat & ketentuan di atas</span>
                    </label>

                    <button @click="if(isAgreed) { openTerms = false } else { alert('Mohon centang kotak persetujuan terlebih dahulu untuk melanjutkan.') }" 
                            :class="isAgreed ? 'bg-emerald-700 hover:bg-emerald-600 text-white cursor-pointer' : 'bg-slate-300 text-slate-500 cursor-not-allowed'"
                            class="w-full sm:w-auto font-bold text-xs uppercase tracking-widest px-6 py-3.5 rounded-xl transition-all duration-300 shadow">
                        Saya Mengerti & Setuju
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    const packageSelect = document.getElementById('venue_package');
    const priceDisplay = document.getElementById('price_display');
    const priceText = document.getElementById('total_price_text');
    const notesWrapper = document.getElementById('custom_notes_wrapper');
    const notesTextarea = document.getElementById('notes_textarea');
    const customPriceWrapper = document.getElementById('custom_price_wrapper');
    const customPriceInput = document.getElementById('custom_price');
    const modal = document.getElementById('paymentModal');
    const form = document.getElementById('reservationForm');

    // FORMAT RUPIAH (DISPLAY SAJA)
    if (customPriceInput) {
        customPriceInput.addEventListener('input', function () {
            let value = this.value.replace(/\D/g, '');

            if (value === '') {
                this.value = '';
                this.setAttribute('data-value', '');
                return;
            }

            // simpan angka asli (INI YANG AKAN DIPAKAI BACKEND)
            this.setAttribute('data-value', value);

            // tampilkan format rupiah
            this.value = new Intl.NumberFormat('id-ID').format(value);
        });
    }

    packageSelect.addEventListener('change', () => {
        const val = packageSelect.value;

        const prices = {
            'Paket Small Meeting': 5000000,
            'Paket Half Day Meeting': 10000000,
            'Paket Full Day Meeting': 15000000,
            'Paket Fullboard Meeting': 20000000,
            'Paket Executive Meeting': 25000000,
            'Paket Premium Meeting': 30000000,
            'Paket Corporate Meeting': 35000000,
            'Paket Grand Ballroom': 40000000,
            'Paket Convention Centre': 45000000,
            'Paket Luxury Convention': 50000000
        };

        if (prices[val]) {
            priceDisplay.classList.remove('hidden');
            priceText.innerText = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                maximumFractionDigits: 0
            }).format(prices[val]);
        } else {
            priceDisplay.classList.add('hidden');
        }

        if (val === 'Paket Custom') {
            customPriceWrapper.classList.remove('hidden');
            customPriceInput.setAttribute('required', 'required');

            notesWrapper.classList.remove('hidden');
            notesTextarea.setAttribute('required', 'required');

            priceDisplay.classList.add('hidden');
        } else {
            customPriceWrapper.classList.add('hidden');
            customPriceInput.removeAttribute('required');
            customPriceInput.value = '';
            customPriceInput.setAttribute('data-value', '');

            notesWrapper.classList.add('hidden');
            notesTextarea.removeAttribute('required');
            notesTextarea.value = '';
        }
    });

    function openModal() {
        if (form.checkValidity()) {
            modal.classList.remove('hidden');
        } else {
            form.reportValidity();
        }
    }

    function closeModal() {
        modal.classList.add('hidden');
    }

    function submitForm(method) {

        // 🔥 INI KUNCINYA: kirim angka asli, bukan "Rp ..."
        if (customPriceInput) {
            const raw = customPriceInput.getAttribute('data-value');
            customPriceInput.value = raw;
        }

        document.getElementById('payment_method').value = method;
        form.submit();
    }
</script>
</body>
</html>