<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hubungi Kami & Lokasi - Bjsm Venue</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;900&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .font-luxury-title { font-family: 'Cinzel', serif; }
        .font-luxury-body { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="antialiased text-slate-800 font-luxury-body selection:bg-emerald-600 selection:text-white overflow-x-hidden bg-slate-50">

    @include('components.navbar')

    <section class="relative min-h-screen pt-36 pb-24 sm:pt-44 lg:pt-44 lg:pb-32 flex flex-col items-center justify-center overflow-hidden bg-slate-950">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1920')] bg-cover bg-center opacity-25 scale-105 animate-[subtle-zoom_20s_infinite_alternate]"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/70 to-slate-950"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
        
        <div class="relative max-w-5xl mx-auto text-center px-4 sm:px-6 lg:px-8 z-10 my-auto" data-aos="fade-up" data-aos-duration="1000">
            <span class="text-amber-400 font-bold text-[10px] sm:text-xs tracking-[0.3em] uppercase mb-6 bg-amber-400/5 inline-block px-6 py-2 rounded-full border border-amber-400/20 backdrop-blur-sm">
                Exclusive Concierge & Support Hub
            </span>
            
            <h1 class="text-3xl sm:text-5xl lg:text-7xl font-black text-white tracking-wide uppercase leading-tight font-luxury-title">
                Mulai Rencana<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-100 to-amber-500">Acara Istimewa Anda</span>
            </h1>
            
            <p class="mt-6 sm:mt-8 text-xs sm:text-lg text-slate-400 max-w-3xl mx-auto font-light leading-relaxed tracking-wide">
                Konsultasikan kebutuhan ruang fisik, koordinasi katering premium, hingga infrastruktur teknologi digital bersama tim perencana profesional kami untuk mewujudkan visi acara bertaraf bintang lima.
            </p>
            
            <div class="mt-10 sm:mt-12 flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-5 w-full max-w-md mx-auto sm:max-w-none">
                <a href="#digital-concierge" class="w-full sm:w-auto bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold px-10 py-4 sm:py-5 rounded-xl text-xs uppercase tracking-widest transition duration-300 shadow-2xl text-center">
                    Panduan Reservasi
                </a>
                <a href="#spatial-location" class="w-full sm:w-auto bg-transparent border border-slate-700 hover:border-amber-400 text-slate-300 hover:text-white font-bold px-10 py-4 sm:py-5 rounded-xl text-xs uppercase tracking-widest transition duration-300 text-center backdrop-blur-sm">
                    Navigasi & Lokasi
                </a>
            </div>
        </div>
    </section>

    <section id="digital-concierge" class="py-24 sm:py-36 bg-slate-100 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24" data-aos="fade-up">
                <span class="text-xs font-bold text-emerald-700 uppercase tracking-[0.25em] block mb-3">Get In Touch</span>
                <h2 class="text-2xl sm:text-5xl font-black text-slate-900 uppercase tracking-wider font-luxury-title">Hubungi & Reservasi</h2>
                <div class="h-[2px] w-20 bg-gradient-to-r from-transparent via-amber-500 to-transparent mx-auto mt-6"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                
                <div class="lg:col-span-7 bg-white border border-slate-200 rounded-2xl p-6 sm:p-10 shadow-xl flex flex-col justify-between" data-aos="fade-right">
                    <div>
                        <h3 class="text-slate-900 font-bold text-lg uppercase tracking-wider font-luxury-title mb-1">Prosedur Reservasi Venue</h3>
                        <p class="text-slate-500 text-xs font-light mb-8">Ikuti langkah mudah berikut untuk mengamankan jadwal dan ruang acara Anda bersama BJSM Venue.</p>
                        
                        <div class="relative border-l border-slate-200 pl-6 space-y-8">
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-emerald-600 text-white font-bold text-xs w-5 h-5 rounded-full flex items-center justify-center shadow-md">1</span>
                                <h4 class="text-sm font-bold text-slate-800 uppercase tracking-wide">Hubungi Kontak Resmi</h4>
                                <p class="text-xs text-slate-500 font-light mt-1 leading-relaxed">
                                    Silakan hubungi tim Advisor kami melalui salah satu saluran komunikasi di sebelah kanan (WhatsApp, Telepon, atau Email) untuk mengonfirmasi ketersediaan tanggal acara.
                                </p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-emerald-600 text-white font-bold text-xs w-5 h-5 rounded-full flex items-center justify-center shadow-md">2</span>
                                <h4 class="text-sm font-bold text-slate-800 uppercase tracking-wide">Konsultasi & Survei Lokasi</h4>
                                <p class="text-xs text-slate-500 font-light mt-1 leading-relaxed">
                                    Jadwalkan inspeksi area fisik ballroom atau ruang pertemuan guna menyesuaikan layout, kebutuhan teknis panggung, multimedia, serta tata letak meja-kursi.
                                </p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-emerald-600 text-white font-bold text-xs w-5 h-5 rounded-full flex items-center justify-center shadow-md">3</span>
                                <h4 class="text-sm font-bold text-slate-800 uppercase tracking-wide">Penerbitan Dokumen Kontrak</h4>
                                <p class="text-xs text-slate-500 font-light mt-1 leading-relaxed">
                                    Setelah detail konsep acara disepakati, tim kami akan menerbitkan nota kesepahaman resmi (MoU) beserta rincian penawaran final untuk diproses lebih lanjut.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="lg:col-span-5 flex flex-col justify-between gap-6" data-aos="fade-left">
                    
                    <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-xl flex-1">
                        <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-widest block mb-1">Direct Channels</span>
                        <h3 class="text-slate-900 font-bold text-lg uppercase tracking-wider font-luxury-title mb-6">Saluran Hubungan</h3>
                        
                        <div class="space-y-6">
                            <div>
                                <span class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1">WhatsApp Dedicated</span>
                                <a href="https://wa.me/6281234567890" target="_blank" class="text-sm font-bold text-slate-900 hover:text-emerald-700 transition tracking-wide">
                                    +62 812-3456-7890
                                </a>
                            </div>
                            <div>
                                <span class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1">Telepon Kantor</span>
                                <p class="text-sm font-semibold text-slate-900 tracking-wide">(021) 555-8721</p>
                            </div>
                            <div>
                                <span class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1">Email Korespondensi</span>
                                <a href="mailto:info@bjsmvenue.com" class="text-sm font-medium text-slate-900 hover:text-emerald-700 transition">info@bjsmvenue.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-xl">
                        <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-widest block mb-1">Operational Hours</span>
                        <h3 class="text-slate-900 font-bold text-lg uppercase tracking-wider font-luxury-title mb-4">Waktu Operasional</h3>
                        
                        <p class="text-xs text-slate-600 font-medium leading-relaxed">
                            Senin s/d Minggu — <span class="text-slate-900 font-bold">08:00 - 21:00 WIB</span>
                        </p>
                        <p class="text-[11px] text-amber-600 mt-3 font-light leading-relaxed">
                            * Catatan: Untuk inspeksi dan survei area fisik ballroom secara langsung, disarankan melakukan konfirmasi jadwal H-1 demi kenyamanan kunjungan Anda.
                        </p>
                    </div>

                </div>
                
            </div>
        </div>
    </section>

    <section id="spatial-location" class="py-24 sm:py-36 bg-slate-50 text-slate-900 scroll-mt-20 overflow-hidden relative">
        <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-emerald-500/[0.03] rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-amber-500/[0.03] rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24" data-aos="fade-up">
                <span class="text-xs font-bold text-emerald-600 uppercase tracking-[0.3em] block mb-3">Spatial Navigation</span>
                <h2 class="text-3xl sm:text-5xl font-black text-slate-900 uppercase tracking-wider font-luxury-title">Alamat & Navigasi Utama</h2>
                <div class="h-[2px] w-24 bg-gradient-to-r from-transparent via-amber-400 to-transparent mx-auto mt-6"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-stretch">
                
                <div class="lg:col-span-5 flex flex-col justify-between space-y-8 font-luxury-body" data-aos="fade-right">
                    <div class="space-y-4">
                        <div class="flex items-center gap-2">
                            <span class="h-[1px] w-6 bg-amber-500"></span>
                            <span class="text-[11px] font-bold text-amber-600 uppercase tracking-[0.2em] block">Headquarters Address</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-extrabold uppercase tracking-wide font-luxury-title text-slate-800">Grand Central Office</h3>
                        <p class="text-sm sm:text-base text-slate-600 font-light leading-relaxed">
                            Jl. Kemang Raya No. 10, Bangka, Mampang Prapatan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12730
                        </p>
                    </div>

                    <div class="pt-6 border-t border-slate-200 space-y-3">
                        <span class="text-[10px] font-bold text-emerald-600 uppercase tracking-widest block">Premium Infrastructure</span>
                        <p class="text-xs text-slate-500 font-light leading-relaxed bg-white p-4 rounded-xl border border-slate-200/60 shadow-sm">
                            Menyediakan jaminan ketersediaan fasilitas lahan parkir VIP bertingkat, sistem kelistrikan cadangan terintegrasi penuh, serta akses muat logistik yang luas.
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-7" data-aos="fade-left">
                    <div class="relative w-full h-[350px] sm:h-[480px] bg-white p-2 rounded-3xl border border-slate-200 shadow-[0_10px_40px_rgba(0,0,0,0.04)] overflow-hidden group">
                        <div class="absolute inset-0 bg-gradient-to-tr from-emerald-500/[0.02] to-amber-500/[0.02] opacity-0 group-hover:opacity-100 transition-opacity duration-750 pointer-events-none rounded-3xl"></div>
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2573295984714!2d106.8139575!3d-6.2363749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f143719ec209%3A0x633ab0a9f5c4a456!2sJakarta!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid" 
                                class="w-full h-full rounded-2xl border-0 opacity-90 group-hover:opacity-100 transition-all duration-500 ease-in-out" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>

        </div>
    </section>

    @include('components.footer')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>
</html>