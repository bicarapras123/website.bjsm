<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bjsm Venue - Premium Booking Portal & Rates</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;900&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .font-luxury-title { font-family: 'Cinzel', serif; }
        .font-luxury-body { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="antialiased text-slate-800 font-luxury-body selection:bg-emerald-600 selection:text-white overflow-x-hidden bg-slate-50">

    <!-- Kontainer utama dengan state modal -->
    <div x-data="{ openTerms: true, isAgreed: false }">

        @include('components.navbar')

        <!-- HERO SECTION -->
        <section class="relative min-h-[75vh] pt-36 pb-24 sm:pt-44 lg:pt-44 lg:pb-32 flex flex-col items-center justify-center overflow-hidden bg-slate-950">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1469371670807-013ccf25f16a?q=80&w=1920')] bg-cover bg-center opacity-20 scale-105 animate-[subtle-zoom_20s_infinite_alternate]"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/70 to-slate-950"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
            
            <div class="relative max-w-5xl mx-auto text-center px-4 sm:px-6 lg:px-8 z-10 my-auto">
                <span class="text-amber-400 font-bold text-[10px] sm:text-xs tracking-[0.3em] uppercase mb-6 bg-amber-400/5 inline-block px-6 py-2 rounded-full border border-amber-400/20 backdrop-blur-sm">
                    Exclusive Online Reservation Portal
                </span>
                
                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-wide uppercase leading-tight font-luxury-title">
                    Portal Reservasi &<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-100 to-amber-500">Rincian Investasi Ruangan</span>
                </h1>
                
                <p class="mt-6 sm:mt-8 text-xs sm:text-lg text-slate-400 max-w-2xl mx-auto font-light leading-relaxed tracking-wide">
                    Transparansi harga, spesifikasi kapasitas terlengkap, dan sistem pemesanan tanggal *real-time* untuk mahakarya perhelatan akbar Anda.
                </p>
                
                <div class="mt-10 sm:mt-12 flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-5 w-full max-w-md mx-auto sm:max-w-none">
                    <a href="#investment-table" class="w-full sm:w-auto bg-transparent border border-slate-700 hover:border-amber-400 text-slate-300 hover:text-white font-bold px-10 py-4 rounded-xl text-xs uppercase tracking-widest transition duration-300 text-center backdrop-blur-sm">
                        Lihat Rincian Harga
                    </a>
                </div>
            </div>
        </section>

        <section id="investment-table" class="py-24 bg-white relative z-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-start">
            
            <div class="lg:col-span-4 space-y-8">
                <div>
                    <span class="text-[10px] font-black text-emerald-600 uppercase tracking-[0.3em] mb-4 block">Our Solutions</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 uppercase tracking-tight font-luxury-title leading-tight">
                        Fleksibilitas Paket Rapat Korporat
                    </h2>
                    <div class="h-[2px] w-20 bg-amber-500 mt-6"></div>
                </div>

                <div class="text-slate-600 text-sm font-light leading-relaxed space-y-6">
                    <p>
                        Setiap detail telah kami susun untuk mendukung produktivitas perusahaan Anda. Dari ruang rapat eksekutif hingga skala konvensi masif, kami menyediakan infrastruktur yang presisi.
                    </p>
                    <p>
                        Pilih paket yang paling sesuai dengan durasi agenda dan kebutuhan logistik tamu Anda. Kami menjamin standar pelayanan premium di setiap tingkatan harga.
                    </p>
                </div>

                <div class="p-6 border border-amber-200 bg-amber-50/50 rounded-2xl">
                    <h4 class="text-slate-900 font-bold uppercase tracking-widest text-xs mb-2">Butuh Penyesuaian?</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Kami terbuka untuk diskusi paket *custom* yang disesuaikan dengan volume delegasi atau kebutuhan khusus acara korporasi Anda.
                    </p>
                </div>
            </div>

            <div class="lg:col-span-8">
                <div class="bg-white rounded-3xl border border-slate-100 shadow-2xl shadow-slate-200/50 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50 border-b border-slate-100">
                                    <th class="p-6 text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em]">Paket</th>
                                    <th class="p-6 text-center text-[10px] font-bold text-slate-900 uppercase tracking-[0.2em]">Durasi</th>
                                    <th class="p-6 text-center text-[10px] font-bold text-slate-900 uppercase tracking-[0.2em]">Price</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-slate-600">
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="p-6 font-bold text-slate-900 text-sm">Small Meeting</td>
                                    <td class="p-6 text-center text-xs">2 Jam</td>
                                    <td class="p-6 text-center font-bold text-slate-800">Rp 5.000.000</td>
                                </tr>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="p-6 font-bold text-slate-900 text-sm">Half Day Meeting</td>
                                    <td class="p-6 text-center text-xs">4 Jam</td>
                                    <td class="p-6 text-center font-bold text-slate-800">Rp 10.000.000</td>
                                </tr>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="p-6 font-bold text-slate-900 text-sm">Full Day Meeting</td>
                                    <td class="p-6 text-center text-xs">8 Jam</td>
                                    <td class="p-6 text-center font-bold text-slate-800">Rp 15.000.000</td>
                                </tr>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="p-6 font-bold text-slate-900 text-sm">Fullboard Meeting</td>
                                    <td class="p-6 text-center text-xs">24 Jam</td>
                                    <td class="p-6 text-center font-bold text-slate-800">Rp 20.000.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

        <!-- CTA SECTION -->
        <section class="pb-24 bg-white relative z-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="w-full flex flex-row items-center justify-center">
                    <a href="{{ route('booking.create') }}" class="w-full sm:w-auto text-center bg-gradient-to-r from-amber-500 via-amber-400 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-black px-12 py-4 rounded-xl text-xs uppercase tracking-[0.2em] transition-all duration-300 shadow-xl shadow-amber-500/10 hover:shadow-amber-500/20 transform hover:-translate-y-0.5 box-border block sm:inline-block">
                        Akses Form Booking Sekarang
                    </a>
                </div>
            </div>
        </section>

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

<!-- MODAL TERMS & CONDITIONS -->
<div x-show="openTerms" 
             class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md">
            
            <div class="bg-white text-slate-800 w-full max-w-3xl rounded-2xl shadow-2xl flex flex-col max-h-[85vh] border border-slate-200">
                
                <!-- Header -->
                <div class="p-6 border-b border-slate-200 bg-slate-50 rounded-t-2xl">
                    <h3 class="text-slate-900 font-bold text-lg uppercase tracking-wider font-luxury-title">Terms & Conditions</h3>
                    <p class="text-[10px] text-slate-500 uppercase tracking-widest font-semibold mt-1">Syarat & Ketentuan Sewa Gedung Grand Venue</p>
                </div>

                <!-- Modal Content -->
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
</body>
</html>