<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paket Layanan Integrasi & Fasilitas - Bjsm Venue</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;900&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- PUSTAKA ANIMASI: AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .font-luxury-title { font-family: 'Cinzel', serif; }
        .font-luxury-body { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="antialiased text-slate-800 font-luxury-body selection:bg-emerald-600 selection:text-white overflow-x-hidden bg-slate-50">

    @include('components.navbar')

    <!-- HERO HEADER -->
    <section class="relative min-h-screen pt-36 pb-24 sm:pt-44 lg:pt-44 lg:pb-32 flex flex-col items-center justify-center overflow-hidden bg-slate-950">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1519167758481-83f550bb49b3?q=80&w=1920')] bg-cover bg-center opacity-25 scale-105 animate-[subtle-zoom_20s_infinite_alternate]"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/70 to-slate-950"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
        
        <div class="relative max-w-5xl mx-auto text-center px-4 sm:px-6 lg:px-8 z-10 my-auto" data-aos="fade-up" data-aos-duration="1000">
            <span class="text-amber-400 font-bold text-[10px] sm:text-xs tracking-[0.3em] uppercase mb-6 bg-amber-400/5 inline-block px-6 py-2 rounded-full border border-amber-400/20 backdrop-blur-sm">
                All-In Custom Solutions & Pricing
            </span>
            
            <h1 class="text-3xl sm:text-5xl lg:text-7xl font-black text-white tracking-wide uppercase leading-tight font-luxury-title">
                Investasi Nilai<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-100 to-amber-500">Paket Sewa Integrasi</span>
            </h1>
            
            <p class="mt-6 sm:mt-8 text-xs sm:text-lg text-slate-400 max-w-3xl mx-auto font-light leading-relaxed tracking-wide">
                Pilih opsi skema paket sewa modular bertaraf bintang lima. Dirancang komprehensif menyatukan fasilitas ruang fisik, infrastruktur teknologi digital canggih, katering premium, hingga manajemen operasional penuh.
            </p>
            
            <div class="mt-10 sm:mt-12 flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-5 w-full max-w-md mx-auto sm:max-w-none">
                <a href="#packages" class="w-full sm:w-auto bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold px-10 py-4 sm:py-5 rounded-xl text-xs uppercase tracking-widest transition duration-300 shadow-2xl text-center">
                    Eksplorasi Paket Sewa
                </a>
                <a href="#amenities" class="w-full sm:w-auto bg-transparent border border-slate-700 hover:border-amber-400 text-slate-300 hover:text-white font-bold px-10 py-4 sm:py-5 rounded-xl text-xs uppercase tracking-widest transition duration-300 text-center backdrop-blur-sm">
                    Fasilitas Penunjang
                </a>
            </div>
        </div>
    </section>

    <!-- PACKAGES SECTION (HIGHLY SPECIFIED & COMPREHENSIVE) -->
    <section id="packages" class="py-24 sm:py-36 bg-slate-100 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24" data-aos="fade-up">
                <span class="text-xs font-bold text-emerald-700 uppercase tracking-[0.25em] block mb-3">All-In Custom Solutions</span>
                <h2 class="text-2xl sm:text-5xl font-black text-slate-900 uppercase tracking-wider font-luxury-title">Paket Layanan Integrasi</h2>
                <div class="h-[2px] w-20 bg-gradient-to-r from-transparent via-amber-500 to-transparent mx-auto mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
                
                <!-- PACK 1: CORPORATE SUMMIT PACK -->
                <div class="border border-slate-200 rounded-2xl p-6 sm:p-8 bg-white shadow-xl flex flex-col justify-between relative group hover:border-emerald-600/30 transition duration-500"
                     data-aos="slide-up" data-aos-delay="100">
                    <div>
                        <h4 class="text-slate-900 font-bold text-lg uppercase tracking-wider font-luxury-title">Corporate Summit Pack</h4>
                        <p class="text-slate-500 text-xs mt-2 font-light">Paket integrasi rapat korporasi eksklusif berorientasi kenyamanan penuh.</p>
                        
                        <div class="mt-8 space-y-6 border-t border-slate-100 pt-6">
                            <div>
                                <h5 class="text-[10px] font-bold text-emerald-700 uppercase tracking-widest mb-2">Spatial & Environment</h5>
                                <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                    <li class="flex items-start"><span class="text-emerald-600 mr-2">✓</span><span>Sewa Summit Executive Suite s.d 8 Jam (Full Day Session)</span></li>
                                    <li class="flex items-start"><span class="text-emerald-600 mr-2">✓</span><span>Sistem tata meja modular (Boardroom, U-Shape, atau Classroom)</span></li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="text-[10px] font-bold text-emerald-700 uppercase tracking-widest mb-2">Technology & Infrastructure</h5>
                                <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                    <li class="flex items-start"><span class="text-emerald-600 mr-2">✓</span><span>Internet Dedicated High-Speed up to 100 Mbps (LAN & Wi-Fi)</span></li>
                                    <li class="flex items-start"><span class="text-emerald-600 mr-2">✓</span><span>Smartboard AI Interaktif, Proyektor Laser 5.000 Lumens, & 2 Wireless Mic</span></li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="text-[10px] font-bold text-emerald-700 uppercase tracking-widest mb-2">F&B Hospitality</h5>
                                <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                    <li class="flex items-start"><span class="text-emerald-600 mr-2">✓</span><span>2x Coffee Break (3 pilihan varian pastry & brewed coffee/tea)</span></li>
                                    <li class="flex items-start"><span class="text-emerald-600 mr-2">✓</span><span>1x Lunch / Dinner Premium Buffet dengan menu Nusantara & Western</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 border-t border-slate-100 pt-6">
                        <span class="block text-slate-400 text-[9px] font-bold uppercase tracking-widest">Investasi Mulai</span>
                        <span class="text-2xl font-bold text-emerald-800 font-luxury-title">Rp 350.000</span> <span class="text-xs text-slate-500">/ Pax</span>
                    </div>
                </div>

                <!-- PACK 2: ROYAL WEDDING PACKAGE -->
                <div class="border-2 border-amber-500 rounded-2xl p-6 sm:p-8 bg-gradient-to-br from-emerald-900 via-slate-900 to-emerald-950 text-white shadow-2xl flex flex-col justify-between relative mt-4 md:mt-0"
                     data-aos="slide-up" data-aos-delay="200">
                    <span class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-gradient-to-r from-amber-400 to-amber-500 text-slate-950 text-[9px] font-black uppercase px-5 py-1.5 rounded-full tracking-widest shadow-lg whitespace-nowrap">The Imperial Signature</span>
                    <div>
                        <h4 class="text-amber-400 font-bold text-xl uppercase tracking-wider font-luxury-title">Royal Wedding Package</h4>
                        <p class="text-slate-300 text-xs mt-2 font-light">Mewujudkan pernikahan megah impian dengan tata kelola bintang lima.</p>
                        
                        <div class="mt-8 space-y-6 border-t border-white/5 pt-6">
                            <div>
                                <h5 class="text-[10px] font-bold text-amber-400 uppercase tracking-widest mb-2">Spatial & Luxury Decor</h5>
                                <ul class="space-y-2 text-xs text-slate-200 font-light">
                                    <li class="flex items-start"><span class="text-amber-400 mr-2">✓</span><span>Eksklusivitas Grand Ballroom s.d 6 Jam (Persiapan AC & Hias H-1)</span></li>
                                    <li class="flex items-start"><span class="text-amber-400 mr-2">✓</span><span>Dekorasi Pelaminan Megah 12 Meter & Lorong Karpet Grand Entrance</span></li>
                                    <li class="flex items-start"><span class="text-amber-400 mr-2">✓</span><span>Free 1 Kamar Executive Suite & 2 Kamar Deluxe (Transit Keluarga)</span></li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="text-[10px] font-bold text-amber-400 uppercase tracking-widest mb-2">Stage, Audio & Multimedia</h5>
                                <ul class="space-y-2 text-xs text-slate-200 font-light">
                                    <li class="flex items-start"><span class="text-amber-400 mr-2">✓</span><span>Layar Utama LED Wall Modular 4x8m Ultra-HD 4K Terintegrasi</span></li>
                                    <li class="flex items-start"><span class="text-amber-400 mr-2">✓</span><span>Sound System Concert Line Array up to 15.000 Watt & Stage Lighting</span></li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="text-[10px] font-bold text-amber-400 uppercase tracking-widest mb-2">Gastronomy & Banquet</h5>
                                <ul class="space-y-2 text-xs text-slate-200 font-light">
                                    <li class="flex items-start"><span class="text-amber-400 mr-2">✓</span><span>Pilihan Katering Menu Premium Internasional Komplit untuk 1.000 Pax</span></li>
                                    <li class="flex items-start"><span class="text-amber-400 mr-2">✓</span><span>Food Tasting untuk 10 Pax & Keluarga Meja VIP dengan Pelayanan Dedicated</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 border-t border-white/5 pt-6">
                        <span class="block text-amber-400 text-[9px] font-bold uppercase tracking-widest">Konfirmasi Harga</span>
                        <span class="text-2xl font-bold text-amber-400 font-luxury-title">Hubungi Kami</span>
                    </div>
                </div>

                <!-- PACK 3: GRAND EXHIBITION PACK -->
                <div class="border border-slate-200 rounded-2xl p-6 sm:p-8 bg-white shadow-xl flex flex-col justify-between relative group hover:border-emerald-600/30 transition duration-300 md:col-span-2 lg:col-span-1"
                     data-aos="slide-up" data-aos-delay="300">
                    <div>
                        <h4 class="text-slate-900 font-bold text-lg uppercase tracking-wider font-luxury-title">Grand Exhibition Pack</h4>
                        <p class="text-slate-500 text-xs mt-2 font-light">Sistem operasional eksibisi pameran dagang masif dengan pasokan daya tinggi.</p>
                        
                        <div class="mt-8 space-y-6 border-t border-slate-100 pt-6">
                            <div>
                                <h5 class="text-[10px] font-bold text-emerald-700 uppercase tracking-widest mb-2">Industrial Spatial Logistik</h5>
                                <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                    <li class="flex items-start"><span class="text-emerald-600 mr-2">✓</span><span>Sewa Penuh Lantai Metropolitan Exhibition Hall (Siklus 24 Jam Penuh)</span></li>
                                    <li class="flex items-start"><span class="text-emerald-600 mr-2">✓</span><span>Jalur Bebas Loading Barang Berat Malam Hari (Tinggi Pintu Akses 4.5m)</span></li>
                                    <li class="flex items-start"><span class="text-emerald-600 mr-2">✓</span><span>Fasilitas Pre-Function Foyer Luas Khusus Registrasi & Tiketing</span></li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="text-[10px] font-bold text-emerald-700 uppercase tracking-widest mb-2">Engineering & Security Power</h5>
                                <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                    <li class="flex items-start"><span class="text-emerald-600 mr-2">✓</span><span>Alokasi Distribusi Panel Listrik 3-Phase Kapasitas Daya Tinggi Cadangan</span></li>
                                    <li class="flex items-start"><span class="text-emerald-600 mr-2">✓</span><span>Sinkronisasi Otomatis Listrik Genset Ganda 100% Khusus Event Industri</span></li>
                                    <li class="flex items-start"><span class="text-emerald-600 mr-2">✓</span><span>Sistem Pengamanan Security Internal & Tim Kebersihan Siaga 24 Jam</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 border-t border-slate-100 pt-6">
                        <span class="block text-slate-400 text-[9px] font-bold uppercase tracking-widest">Investasi Mulai</span>
                        <span class="text-2xl font-bold text-emerald-800 font-luxury-title">Rp 75 Juta</span> <span class="text-xs text-slate-400">/ Hari</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AMENITIES SECTION -->
    <section id="amenities" class="py-24 sm:py-36 bg-slate-900 text-white scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24" data-aos="fade-up">
                <span class="text-xs font-bold text-emerald-400 uppercase tracking-[0.25em] block mb-3">VIP Hospitality</span>
                <h2 class="text-2xl sm:text-5xl font-black text-white uppercase tracking-wider font-luxury-title">Fasilitas Eksklusif Penunjang</h2>
                <div class="h-[2px] w-20 bg-gradient-to-r from-transparent via-amber-400 to-transparent mx-auto mt-6"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <!-- Fasilitas 1 -->
                <div class="bg-slate-950 p-6 sm:p-8 rounded-2xl border border-white/5 text-center group hover:border-emerald-500/30 transition duration-300 shadow-xl flex flex-col items-center"
                     data-aos="slide-up" data-aos-delay="100">
                    <div class="w-10 h-10 text-amber-400 mb-4"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499c.173-.434.764-.434.938 0l2.35 4.765a1.125 1.125 0 00.847.616l5.253.762c.47.068.657.646.317.974l-3.8 3.704a1.125 1.125 0 00-.325.999l.897 5.232c.09.526-.455.922-.923.675l-4.7-2.47a1.125 1.125 0 00-1.014 0l-4.7 2.47c-.468.247-1.014-.149-.923-.675l.897-5.232a1.125 1.125 0 00-.325-.999l-3.8-3.704c-.34-.327-.152-.906.317-.974l5.254-.762a1.125 1.125 0 00.847-.616l2.35-4.765z"/></svg></div>
                    <h4 class="text-white font-bold font-luxury-title uppercase tracking-wider text-sm">VIP Holding Room</h4>
                    <p class="text-slate-400 text-xs mt-3 font-light leading-relaxed">Ruang transit privat mewah yang dilengkapi dengan jajaran sofa premium, fasilitas rest room internal eksklusif, cermin rias ukuran penuh, serta akses lift khusus ajudan VVIP.</p>
                </div>
                
                <!-- Fasilitas 2 -->
                <div class="bg-slate-950 p-6 sm:p-8 rounded-2xl border border-white/5 text-center group hover:border-emerald-500/30 transition duration-300 shadow-xl flex flex-col items-center"
                     data-aos="slide-up" data-aos-delay="200">
                    <div class="w-10 h-10 text-amber-400 mb-4"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m16.5-18v18m-13.5-16.5h10.5m-10.5 3h10.5m-10.5 3h10.5m-10.5 3h10.5"/></svg></div>
                    <h4 class="text-white font-bold font-luxury-title uppercase tracking-wider text-sm">Pre-Function Foyer</h4>
                    <p class="text-slate-400 text-xs mt-3 font-light leading-relaxed">Area selasar depan yang sangat lapang dan megah, dioptimalkan sepenuhnya untuk alur meja registrasi tamu, hospitality coffee break session, maupun penempatan booth pers.</p>
                </div>
                
                <!-- Fasilitas 3 -->
                <div class="bg-slate-950 p-6 sm:p-8 rounded-2xl border border-white/5 text-center group hover:border-emerald-500/30 transition duration-300 shadow-xl flex flex-col items-center"
                     data-aos="slide-up" data-aos-delay="300">
                    <div class="w-10 h-10 text-amber-400 mb-4"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5"/></svg></div>
                    <h4 class="text-white font-bold font-luxury-title uppercase tracking-wider text-sm">Control Room Mezzanine</h4>
                    <p class="text-slate-400 text-xs mt-3 font-light leading-relaxed">Ruang kendali sistem suara (audio), sistem multimedia, dan tata lampu (lighting) terisolasi di lantai atas untuk menjamin eksekusi teknis acara bebas dari gangguan.</p>
                </div>
                
                <!-- Fasilitas 4 -->
                <div class="bg-slate-950 p-6 sm:p-8 rounded-2xl border border-white/5 text-center group hover:border-emerald-500/30 transition duration-300 shadow-xl flex flex-col items-center"
                     data-aos="slide-up" data-aos-delay="400">
                    <div class="w-10 h-10 text-amber-400 mb-4"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg></div>
                    <h4 class="text-white font-bold font-luxury-title uppercase tracking-wider text-sm">100% Power Back-Up</h4>
                    <p class="text-slate-400 text-xs mt-3 font-light leading-relaxed">Infrastruktur kelistrikan genset ganda otomatis tersinkronisasi tanpa jeda kedip (Uninterruptible Power Supply) jika terjadi pemutusan pasokan daya utama listrik kota.</p>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    <!-- PUSTAKA ANIMASI: AOS JAVASCRIPT -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>
</html>