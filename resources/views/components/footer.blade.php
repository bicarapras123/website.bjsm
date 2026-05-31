<footer x-data="{ openTerms: false, isAgreed: false }" class="bg-slate-950 text-slate-400 border-t border-white/5 font-luxury-body relative z-30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 lg:gap-16">
            
            <div class="md:col-span-5 space-y-6">
                <div class="flex items-center space-x-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-emerald-600 to-emerald-900 rounded-xl flex items-center justify-center shadow-2xl border border-emerald-500/30 p-2.5 overflow-hidden">
                        <img src="{{ asset('images/logobjsm.jpeg') }}" alt="Logo Grand Venue" class="max-h-full max-w-full object-contain">
                    </div>
                    <div class="leading-none">
                        <span class="block text-white font-bold text-xl tracking-widest font-luxury-title">BJSM VENUE</span>
                        <span class="block text-amber-400 text-[10px] font-semibold tracking-widest uppercase mt-1.5 whitespace-nowrap">Buana Jaya Sugih Makmur</span>
                    </div>
                </div>
                <p class="text-xs sm:text-sm text-slate-400 font-light leading-relaxed max-w-sm">
                    Menyediakan convention center bertaraf internasional, ballroom megah, dan fasilitas meeting room premium eksklusif untuk mendukung kesuksesan event mahakarya Anda.
                </p>
            </div>

            <div class="md:col-span-3 space-y-4">
                <h4 class="text-white text-xs font-bold uppercase tracking-[0.2em] font-luxury-title">Navigasi</h4>
                <ul class="space-y-3 text-xs font-medium">
                    <li><a href="#" class="hover:text-amber-400 transition duration-200 block py-0.5">Beranda</a></li>
                    <li><a href="#spaces" class="hover:text-amber-400 transition duration-200 block py-0.5">Koleksi Ruangan</a></li>
                    <li><a href="#packages" class="hover:text-amber-400 transition duration-200 block py-0.5">Paket Sewa</a></li>
                    <li><a href="#amenities" class="hover:text-amber-400 transition duration-200 block py-0.5">Fasilitas VIP</a></li>
                </ul>
            </div>

            <div class="md:col-span-4 space-y-4">
                <h4 class="text-white text-xs font-bold uppercase tracking-[0.2em] font-luxury-title">Kontak & Lokasi</h4>
                <ul class="space-y-4 text-xs font-light leading-relaxed">
                    <li class="flex items-start space-x-3">
                        <svg class="h-5 w-5 text-amber-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        <span>Jl. Protokol Utama No. 88, Kawasan Bisnis Terpadu, Jakarta, Indonesia</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="h-5 w-5 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.387a12.017 12.017 0 0 1-5.99-5.99c-.156-.441.01-.928.387-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.75Z" />
                        </svg>
                        <span>+62 (21) 555-8899 / +62 812-3456-7890</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="h-5 w-5 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0l-7.5-4.615m19.5 0A2.25 2.25 0 0 1 19.5 11.3l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L2.1 11.3A2.25 2.25 0 0 1 2.25 6.75" />
                        </svg>
                        <span>info@grandvenue.com</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="border-t border-white/5 bg-slate-950 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] font-medium uppercase tracking-wider text-slate-500">
            <div>
                &copy; {{ date('Y') }} <span class="text-slate-400">BUANA JAYA SUGIH MAKMUR</span>. All Rights Reserved.
            </div>
            <div class="flex items-center space-x-6">
                <button @click="openTerms = true" class="hover:text-amber-400 transition duration-200 focus:outline-none">
                    Terms & Conditions
                </button>
                <a href="#" class="hover:text-amber-400 transition duration-200">Privacy Policy</a>
            </div>
        </div>
    </div>

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
            
            <!-- Modal Header -->
            <div class="p-6 border-b border-slate-200 flex items-center justify-between bg-slate-50 rounded-t-2xl">
                <div>
                    <h3 class="text-slate-900 font-bold text-lg uppercase tracking-wider font-luxury-title">Terms & Conditions</h3>
                    <p class="text-[10px] text-slate-500 uppercase tracking-widest font-semibold mt-1">Syarat & Ketentuan Sewa Gedung Grand Venue</p>
                </div>
                <button @click="openTerms = false" class="text-slate-400 hover:text-slate-600 p-2 focus:outline-none transition" aria-label="Close">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Modal Content (Scrollable) -->
            <div class="p-6 sm:p-8 overflow-y-auto space-y-6 text-xs sm:text-sm text-slate-600 font-light leading-relaxed">
                
                <section class="space-y-2">
                    <h5 class="font-bold text-slate-900 uppercase tracking-wider">1. Definisi & Ketentuan Umum</h5>
                    <p>Perjanjian sewa ini berlaku sah antara pihak manajemen <strong>Grand Venue</strong> (selanjutnya disebut "Pengelola") dan badan hukum atau perorangan yang melakukan pemesanan (selanjutnya disebut "Penyewa"). Dengan melakukan pembayaran uang muka, Penyewa dianggap telah membaca, memahami, dan menyetujui seluruh klausul ini.</p>
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
                        <li>Membayar biaya kompensasi operasional (*charge vendor luar*) sesuai klasifikasi tarif Grand Venue.</li>
                        <li>Vendor luar wajib menghadiri *Technical Meeting* resmi dan mematuhi batas daya listrik serta regulasi pemasangan dekorasi yang ditetapkan teknisi gedung.</li>
                    </ul>
                </section>

                <section class="space-y-2">
                    <h5 class="font-bold text-slate-900 uppercase tracking-wider">7. Batasan Kapasitas & Ketertiban</h5>
                    <p>Jumlah tamu dan kru tidak boleh melebihi batas kapasitas maksimal aman ruangan yang telah disepakati untuk menjaga keselamatan bersama. Penyewa beserta pihak ketiga (vendor/tamu) dilarang keras membawa senjata api, senjata tajam, obat-obatan terlarang, serta melakukan aktivitas yang melanggar hukum RI di lingkungan Grand Venue.</p>
                </section>

                <section class="space-y-2">
                    <h5 class="font-bold text-slate-900 uppercase tracking-wider">8. Tanggung Jawab & Force Majeure</h5>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Penyewa bertanggung jawab penuh atas hilangnya barang pribadi milik tamu undangan atau kru selama acara berlangsung.</li>
                        <li>Pihak Grand Venue dibebaskan dari tuntutan hukum jika terjadi kegagalan atau penundaan acara yang disebabkan oleh keadaan darurat di luar kendali manusia (*Force Majeure*), termasuk namun tidak terbatas pada bencana alam, kebakaran, huru-hara, pemadaman listrik massal kota, atau kebijakan pembatasan resmi dari pemerintah.</li>
                    </ul>
                </section>

            </div>

            <!-- Modal Footer -->
            <div class="p-5 bg-slate-50 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4 rounded-b-2xl">
                <label class="flex items-center space-x-3 cursor-pointer select-none w-full sm:w-auto">
                    <input type="checkbox" 
                           x-model="isAgreed" 
                           class="w-5 h-5 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500/30 accent-emerald-600 transition duration-150">
                    <span class="text-xs sm:text-sm text-slate-700 font-medium">
                        Saya menyetujui seluruh syarat & ketentuan di atas
                    </span>
                </label>

                <button @click="openTerms = false" 
                        :disabled="!isAgreed"
                        :class="isAgreed ? 'bg-emerald-700 hover:bg-emerald-600 text-white cursor-pointer' : 'bg-slate-300 text-slate-500 cursor-not-allowed'"
                        class="w-full sm:w-auto font-bold text-xs uppercase tracking-widest px-6 py-3.5 rounded-xl transition-all duration-300 shadow">
                    Saya Mengerti
                </button>
            </div>

        </div>
    </div>
</footer>