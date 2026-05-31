<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Koleksi Ruangan & Galeri Eksklusif - Bjsm Venue</title>
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
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=1920')] bg-cover bg-center opacity-25 scale-105 animate-[subtle-zoom_20s_infinite_alternate]"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/70 to-slate-950"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
        
        <div class="relative max-w-5xl mx-auto text-center px-4 sm:px-6 lg:px-8 z-10 my-auto" data-aos="fade-up" data-aos-duration="1000">
            <span class="text-amber-400 font-bold text-[10px] sm:text-xs tracking-[0.3em] uppercase mb-6 bg-amber-400/5 inline-block px-6 py-2 rounded-full border border-amber-400/20 backdrop-blur-sm">
                BJSM VENUE PORTFOLIO & SPECIFICATIONS
            </span>
            
            <h1 class="text-3xl sm:text-5xl lg:text-7xl font-black text-white tracking-wide uppercase leading-tight font-luxury-title">
                Arsitektur & Estetika<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-100 to-amber-500">Katalog Ruang Eksklusif</span>
            </h1>
            
            <p class="mt-6 sm:mt-8 text-xs sm:text-lg text-slate-400 max-w-3xl mx-auto font-light leading-relaxed tracking-wide">
                Inspeksi setiap sudut ruang konvensi secara visual. Temukan keselarasan kapasitas komparatif, detail layout dimensional, dan fasilitas penunjang premium yang dikonfigurasi khusus untuk kesuksesan agenda Anda.
            </p>
            
            <div class="mt-10 sm:mt-12 flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-5 w-full max-w-md mx-auto sm:max-w-none">
                <a href="#gallery-documentation" class="w-full sm:w-auto bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold px-10 py-4 sm:py-5 rounded-xl text-xs uppercase tracking-widest transition duration-300 shadow-2xl text-center">
                    Jelajahi Galeri Foto
                </a>
                <a href="{{ route('booking.index') }}" class="w-full sm:w-auto bg-transparent border border-slate-700 hover:border-amber-400 text-slate-300 hover:text-white font-bold px-10 py-4 sm:py-5 rounded-xl text-xs uppercase tracking-widest transition duration-300 text-center backdrop-blur-sm">
                    Booking Jadwal Gedung
                </a>
            </div>
        </div>
    </section>

    <!-- GALERI DOKUMENTASI EVENT -->
    <section id="gallery-documentation" class="py-24 sm:py-32 bg-white border-t border-slate-100 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Deskripsi Header Section -->
            <div class="mb-16 border-b border-slate-200 pb-6" data-aos="fade-right" data-aos-duration="800">
                <span class="text-xs font-bold text-emerald-700 uppercase tracking-[0.2em] block mb-2">Visual Showcase</span>
                <h2 class="text-xl sm:text-3xl font-bold text-slate-900 uppercase tracking-widest font-luxury-title flex items-center gap-3">
                    <span class="w-2 h-6 bg-amber-500 block rounded"></span> Galeri Dokumentasi Event
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm mt-3 font-light max-w-3xl leading-relaxed">
                    Kilasan realisasi berbagai momentum mahakarya yang telah terselenggara di BJSM Venue. Setiap tata panggung, pencahayaan, dan konfigurasi modular dirancang presisi demi menghadirkan atmosfer megah berkelas internasional.
                </p>
            </div>

            <!-- Grid Galeri dengan Animasi Slide Slide-Up Berurutan -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                
                <!-- Foto 1 (Delay 100ms) -->
                <div class="relative overflow-hidden rounded-xl aspect-[4/3] bg-slate-100 group shadow-md border border-slate-100" 
                     data-aos="slide-up" data-aos-delay="100" data-aos-duration="700">
                    <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?q=80&w=600" alt="Luxury Wedding Setup" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-slate-950/75 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6 backdrop-blur-[2px]">
                        <span class="text-amber-400 text-[10px] font-bold tracking-widest uppercase">Wedding Reception</span>
                        <h4 class="text-white font-semibold font-luxury-title tracking-wide text-sm mt-1">Setup Meja Imperial Banquet</h4>
                        <p class="text-slate-300 text-[11px] mt-1.5 font-light leading-snug">Simulasi tata letak jamuan makan formal melingkar berskala besar dengan dekorasi floral eksklusif.</p>
                    </div>
                </div>

                <!-- Foto 2 (Delay 200ms) -->
                <div class="relative overflow-hidden rounded-xl aspect-[4/3] bg-slate-100 group shadow-md border border-slate-100"
                     data-aos="slide-up" data-aos-delay="200" data-aos-duration="700">
                    <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?q=80&w=600" alt="International Seminar" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-slate-950/75 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6 backdrop-blur-[2px]">
                        <span class="text-amber-400 text-[10px] font-bold tracking-widest uppercase">Corporate Event</span>
                        <h4 class="text-white font-semibold font-luxury-title tracking-wide text-sm mt-1">Konferensi Internasional & Seminar</h4>
                        <p class="text-slate-300 text-[11px] mt-1.5 font-light leading-snug">Integrasi teknologi multimedia nirkabel dan visualisasi layar ganda untuk kelancaran presentasi korporasi.</p>
                    </div>
                </div>

                <!-- Foto 3 (Delay 300ms) -->
                <div class="relative overflow-hidden rounded-xl aspect-[4/3] bg-slate-100 group shadow-md border border-slate-100"
                     data-aos="slide-up" data-aos-delay="300" data-aos-duration="700">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=600" alt="Concert Lighting" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-slate-950/75 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6 backdrop-blur-[2px]">
                        <span class="text-amber-400 text-[10px] font-bold tracking-widest uppercase">Music Concert</span>
                        <h4 class="text-white font-semibold font-luxury-title tracking-wide text-sm mt-1">Tata Panggung & Sound Acoustics 120dB</h4>
                        <p class="text-slate-300 text-[11px] mt-1.5 font-light leading-snug">Sistem insulasi suara bertaraf studio studio yang menjamin kejernihan audio performa panggung musik masif.</p>
                    </div>
                </div>

                <!-- Foto 4 (Delay 100ms di baris baru) -->
                <div class="relative overflow-hidden rounded-xl aspect-[4/3] bg-slate-100 group shadow-md border border-slate-100"
                     data-aos="slide-up" data-aos-delay="100" data-aos-duration="700">
                    <img src="https://images.unsplash.com/photo-1431540015161-0bf868a2d407?q=80&w=600" alt="Boardroom Meeting" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-slate-950/75 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6 backdrop-blur-[2px]">
                        <span class="text-amber-400 text-[10px] font-bold tracking-widest uppercase">Executive Meeting</span>
                        <h4 class="text-white font-semibold font-luxury-title tracking-wide text-sm mt-1">Sesi Rapat Direksi Eksklusif</h4>
                        <p class="text-slate-300 text-[11px] mt-1.5 font-light leading-snug">Ruang rapat berprivasi tinggi yang dilengkapi fasilitas smartboard interaktif dan sistem tracking microphone.</p>
                    </div>
                </div>

                <!-- Foto 5 (Delay 200ms) -->
                <div class="relative overflow-hidden rounded-xl aspect-[4/3] bg-slate-100 group shadow-md border border-slate-100"
                     data-aos="slide-up" data-aos-delay="200" data-aos-duration="700">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=600" alt="Product Launch Exhibition" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-slate-950/70 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6 backdrop-blur-[2px]">
                        <span class="text-amber-400 text-[10px] font-bold tracking-widest uppercase">Exhibition Fair</span>
                        <h4 class="text-white font-semibold font-luxury-title tracking-wide text-sm mt-1">Metropolitan Product Launch Stage</h4>
                        <p class="text-slate-300 text-[11px] mt-1.5 font-light leading-snug">Area lantai komersial berkapasitas beban berat, dioptimalkan untuk pameran berskala besar.</p>
                    </div>
                </div>

                <!-- Foto 6 (Delay 300ms) -->
                <div class="relative overflow-hidden rounded-xl aspect-[4/3] bg-slate-100 group shadow-md border border-slate-100"
                     data-aos="slide-up" data-aos-delay="300" data-aos-duration="700">
                    <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?q=80&w=600" alt="Gala Dinner Lighting" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-slate-950/75 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6 backdrop-blur-[2px]">
                        <span class="text-amber-400 text-[10px] font-bold tracking-widest uppercase">Gala Night</span>
                        <h4 class="text-white font-semibold font-luxury-title tracking-wide text-sm mt-1">Suasana Malam Penganugerahan Megah</h4>
                        <p class="text-slate-300 text-[11px] mt-1.5 font-light leading-snug">Pengaturan ambient lighting dinamis dari control room mezzanine untuk mendukung jalannya perayaan formal.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('components.footer')

    <!-- PUSTAKA ANIMASI: AOS JAVASCRIPT -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Inisialisasi efek gerakan saat scroll layar
        AOS.init({
            once: true // Animasi hanya berjalan 1 kali ketika di-scroll pertama kali (biar tidak mengganggu kenyamanan mata)
        });
    </script>
</body>
</html>