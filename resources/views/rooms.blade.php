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
                <a href="https://wa.me/6281319388855" target="_blank" class="w-full sm:w-auto bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold px-10 py-4 sm:py-5 rounded-xl text-xs uppercase tracking-widest transition duration-300 shadow-2xl shadow-amber-500/20 text-center flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.187 0-5.781 2.594-5.781 5.781 0 1.016.266 1.984.734 2.836l-1.078 3.938 4.047-1.078c.813.438 1.734.688 2.703.688 3.187 0 5.781-2.594 5.781-5.781 0-3.187-2.594-5.781-5.781-5.781zm0 10.781c-.844 0-1.641-.234-2.328-.625l-1.641.438.438-1.609c-.422-.734-.672-1.578-.672-2.484 0-2.656 2.156-4.813 4.813-4.813 2.656 0 4.813 2.156 4.813 4.813 0 2.656-2.156 4.813-4.813 4.813z"/>
                    </svg>
                    Hubungi Admin
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
            
            <div class="mb-16 border-b border-slate-200 pb-6" data-aos="fade-right" data-aos-duration="800">
                <span class="text-xs font-bold text-emerald-700 uppercase tracking-[0.2em] block mb-2">Visual Showcase</span>
                <h2 class="text-xl sm:text-3xl font-bold text-slate-900 uppercase tracking-widest font-luxury-title flex items-center gap-3">
                    <span class="w-2 h-6 bg-amber-500 block rounded"></span> Galeri Ruangan
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm mt-3 font-light max-w-3xl leading-relaxed">
                    Kilasan realisasi berbagai momentum mahakarya yang telah terselenggara di BJSM Venue.
                </p>
            </div>

            @php
                $galleries = [
                    ['img' => 'doc1.jpeg', 'title' => '', 'desc' => 'Simulasi tata letak jamuan makan formal.'],
                    ['img' => 'doc2.jpeg', 'title' => '', 'desc' => 'Integrasi teknologi multimedia nirkabel.'],
                    ['img' => 'doc3.jpeg', 'title' => '', 'desc' => 'Sistem insulasi suara bertaraf studio.'],
                ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($galleries as $index => $item)
                <div class="relative overflow-hidden rounded-xl aspect-[4/3] bg-slate-100 group shadow-md border border-slate-100" 
                     data-aos="slide-up" data-aos-delay="{{ ($index + 1) * 100 }}" data-aos-duration="700">
                    
                    <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    
                    <div class="absolute inset-0 bg-slate-950/75 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6 backdrop-blur-[2px]">
                        <span class="text-amber-400 text-[10px] font-bold tracking-widest uppercase"> {{ $index + 1 }}</span>
                        <h4 class="text-white font-semibold font-luxury-title tracking-wide text-sm mt-1">{{ $item['title'] }}</h4>
                        <p class="text-slate-300 text-[11px] mt-1.5 font-light leading-snug">{{ $item['desc'] }}</p>
                    </div>
                </div>
                @endforeach
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