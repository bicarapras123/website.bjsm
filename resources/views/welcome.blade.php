<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bjsm Venue - Premium Ballroom & Meeting Space Rental</title>
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

    <div x-data="{ welcomeTerms: true, isWelcomeAgreed: false }" 
         x-init="$watch('welcomeTerms', value => document.body.style.overflow = value ? 'hidden' : '')"
         :style="welcomeTerms ? 'overflow: hidden; height: 100vh;' : ''">

        @include('components.navbar')

        <section class="relative min-h-screen pt-36 pb-24 sm:pt-44 lg:pt-44 lg:pb-32 flex flex-col items-center justify-center overflow-hidden bg-slate-950">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1519167758481-83f550bb49b3?q=80&w=1920')] bg-cover bg-center opacity-25 scale-105 animate-[subtle-zoom_20s_infinite_alternate]"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/70 to-slate-950"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
            
            <div class="relative max-w-5xl mx-auto text-center px-4 sm:px-6 lg:px-8 z-10 my-auto">
                <span class="text-amber-400 font-bold text-[10px] sm:text-xs tracking-[0.3em] uppercase mb-6 bg-amber-400/5 inline-block px-6 py-2 rounded-full border border-amber-400/20 backdrop-blur-sm">
                    The Masterpiece Convention & Exhibition Center
                </span>
                
                <h1 class="text-3xl sm:text-5xl lg:text-7xl font-black text-white tracking-wide uppercase leading-tight font-luxury-title">
                    Mewujudkan Kemegahan<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-100 to-amber-500">Event Mahakarya Anda</span>
                </h1>
                
                <p class="mt-6 sm:mt-8 text-xs sm:text-lg text-slate-400 max-w-3xl mx-auto font-light leading-relaxed tracking-wide">
                    Sewa Grand Ballroom megah berskala internasional, ruang rapat korporat eksklusif, hingga aula eksibisi masif dengan integrasi teknologi multimedia tercanggih dan hospitality kelas dunia.
                </p>
                
                <div class="mt-10 sm:mt-12 flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-5 w-full max-w-md mx-auto sm:max-w-none">
                    <a href="#spaces" class="w-full sm:w-auto bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold px-10 py-4 sm:py-5 rounded-xl text-xs uppercase tracking-widest transition duration-300 shadow-2xl text-center">
                        Jelajahi Ruangan
                    </a>
                    <a href="{{ route('booking.index') }}" class="w-full sm:w-auto bg-transparent border border-slate-700 hover:border-amber-400 text-slate-300 hover:text-white font-bold px-10 py-4 sm:py-5 rounded-xl text-xs uppercase tracking-widest transition duration-300 text-center backdrop-blur-sm">
                        Booking Jadwal Gedung
                    </a>
                </div>
            </div>
        </section>


        <section class="relative z-20 -mt-16 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 bg-white border border-slate-200/60 p-6 sm:p-8 rounded-2xl shadow-2xl text-center">
                <div class="p-2 sm:p-4 border-r border-slate-100 last:border-none group flex flex-col items-center">
                    <div class="w-6 h-6 sm:w-8 sm:h-8 text-emerald-700 mb-2 group-hover:scale-110 transition duration-300">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.65-2.42 9.094 9.094 0 00-5.182 0 3 3 0 00-4.65 2.42 9.094 9.094 0 003.741.479m12.118-.479a9.047 9.047 0 00-11.236 0m11.236 0a9.047 9.047 0 01-11.236 0m11.236 0V17.25c0-1.657-1.343-3-3-3h-1.318a4.5 4.5 0 00-4.5 4.5v1.471m12.118-.479A9.047 9.047 0 0012 15.75c-2.316 0-4.428.868-6.031 2.292m0 0a9.047 9.047 0 0111.236 0M3.01 18.72a9.094 9.094 0 013.741-.479 3 3 0 01-4.65-2.42 9.094 9.094 0 015.182 0 3 3 0 014.65 2.42 9.094 9.094 0 01-3.741.479m-12.118-.479a9.047 9.047 0 0111.236 0M3.01 18.72a9.047 9.047 0 0011.236 0M3.01 18.72V17.25c0-1.657 1.343-3 3-3h1.318a4.5 4.5 0 014.5 4.5v1.471M5.969 18.72A9.047 9.047 0 0112 15.75c2.316 0 4.428.868-6.031 2.292m0 0V17.25a4.5 4.5 0 00-4.5-4.5H10.5a4.5 4.5 0 00-4.5 4.5v1.47M12 12a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"/></svg>
                    </div>
                    <span class="block text-xl sm:text-2xl font-bold text-slate-900 font-luxury-title tracking-wider">5,000+</span>
                    <span class="block text-[9px] sm:text-[10px] text-slate-500 font-semibold uppercase tracking-widest mt-2">Kapasitas Maks</span>
                </div>
                <div class="p-2 sm:p-4 md:border-r border-slate-100 last:border-none group flex flex-col items-center">
                    <div class="w-6 h-6 sm:w-8 sm:h-8 text-emerald-700 mb-2 group-hover:scale-110 transition duration-300">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 16.5h1.5m3 0H15"/></svg>
                    </div>
                    <span class="block text-xl sm:text-2xl font-bold text-slate-900 font-luxury-title tracking-wider">12+</span>
                    <span class="block text-[9px] sm:text-[10px] text-slate-500 font-semibold uppercase tracking-widest mt-2">Suites Room</span>
                </div>
                <div class="p-2 sm:p-4 border-r border-slate-100 last:border-none group flex flex-col items-center">
                    <div class="w-6 h-6 sm:w-8 sm:h-8 text-emerald-700 mb-2 group-hover:scale-110 transition duration-300">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z"/></svg>
                    </div>
                    <span class="block text-xl sm:text-2xl font-bold text-slate-900 font-luxury-title tracking-wider">120 dB</span>
                    <span class="block text-[9px] sm:text-[10px] text-slate-500 font-semibold uppercase tracking-widest mt-2">Sound Acoustics</span>
                </div>
                <div class="p-2 sm:p-4 last:border-none group flex flex-col items-center">
                    <div class="w-6 h-6 sm:w-8 sm:h-8 text-emerald-700 mb-2 group-hover:scale-110 transition duration-300">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.129-1.125V9.75M3.375 11.25h17.25M5.625 6h12.75M3.122 11.25l1.644-4.93A1.875 1.875 0 016.536 5h10.928a1.875 1.875 0 011.77 1.32l1.644 4.93"/></svg>
                    </div>
                    <span class="block text-xl sm:text-2xl font-bold text-slate-900 font-luxury-title tracking-wider">1,500+</span>
                    <span class="block text-[9px] sm:text-[10px] text-slate-500 font-semibold uppercase tracking-widest mt-2">Secure Parkir</span>
                </div>
            </div>
        </section>

        <section id="spaces" class="py-24 sm:py-36 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24">
                    <span class="text-xs font-bold text-emerald-700 uppercase tracking-[0.25em] block mb-3">Elite Venues</span>
                    <h2 class="text-2xl sm:text-5xl font-black text-slate-900 uppercase tracking-wider font-luxury-title">Koleksi Destinasi Ruangan</h2>
                    <div class="h-[2px] w-20 bg-gradient-to-r from-transparent via-amber-500 to-transparent mx-auto mt-6"></div>
                    <p class="mt-6 text-xs sm:text-base text-slate-600 font-light leading-relaxed">Kemegahan tata arsitektur berkelas dengan dinding kedap suara bertaraf studio, dirancang adaptif mengikuti skala formal agenda Anda.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                    <div class="bg-slate-50 rounded-2xl border border-slate-200/80 overflow-hidden shadow-lg hover:border-emerald-600/40 transition duration-500 group flex flex-col justify-between">
                        <div>
                            <div class="h-60 sm:h-72 bg-slate-200 relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1469371670807-013ccf25f16a?q=80&w=600" alt="Grand Ballroom" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                                <span class="absolute top-4 right-4 bg-emerald-800 text-white text-[9px] font-bold uppercase px-4 py-1.5 rounded-full tracking-widest border border-emerald-500/30 shadow shadow-emerald-950/20">The Masterpiece</span>
                            </div>
                            <div class="p-6 sm:p-8">
                                <h3 class="font-bold text-slate-900 text-lg sm:text-xl uppercase tracking-wider font-luxury-title">The Royal Grand Ballroom</h3>
                                <p class="text-xs text-emerald-700 font-semibold mt-2 tracking-wide">Konvensi Akbar, Resepsi Kenegaraan & Konser</p>
                                <div class="mt-6 sm:mt-8 pt-6 border-t border-slate-200 grid grid-cols-2 gap-4 text-xs text-slate-600">
                                    <div class="flex items-center space-x-2"><div class="w-4 h-4 text-emerald-700"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg></div><span class="font-medium">s.d 2,500 Pax</span></div>
                                    <div class="flex items-center space-x-2"><div class="w-4 h-4 text-emerald-700"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v16.5m0-16.5h16.5m-16.5 0L19.5 19.5M19.5 3.75v16.5m0-16.5H3.75"/></svg></div><span class="font-medium">Area 1,200 m²</span></div>
                                    <div class="flex items-center space-x-2"><span class="text-emerald-700 font-bold">✓</span> <span>Ceiling 9m</span></div>
                                    <div class="flex items-center space-x-2"><span class="text-emerald-700 font-bold">✓</span> <span>LED Wall 4K</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 sm:p-8 pt-0">
                            <a href="{{ route('register') }}" class="block w-full text-center bg-slate-900 hover:bg-emerald-800 text-white font-bold py-4 rounded-xl text-xs uppercase tracking-widest transition duration-300">Cek Kalender Jadwal</a>
                        </div>
                    </div>

                    <div class="bg-slate-50 rounded-2xl border border-slate-200/80 overflow-hidden shadow-lg hover:border-emerald-600/40 transition duration-500 group flex flex-col justify-between">
                        <div>
                            <div class="h-60 sm:h-72 bg-slate-200 relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=600" alt="Exhibition Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                            </div>
                            <div class="p-6 sm:p-8">
                                <h3 class="font-bold text-slate-900 text-lg sm:text-xl uppercase tracking-wider font-luxury-title">Metropolitan Exhibition Center</h3>
                                <p class="text-xs text-emerald-700 font-semibold mt-2 tracking-wide">Pameran Industri, Trade Fair & Product Launch</p>
                                <div class="mt-6 sm:mt-8 pt-6 border-t border-slate-200 grid grid-cols-2 gap-4 text-xs text-slate-600">
                                    <div class="flex items-center space-x-2"><div class="w-4 h-4 text-emerald-700"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg></div><span class="font-medium">s.d 4,000 Pax</span></div>
                                    <div class="flex items-center space-x-2"><div class="w-4 h-4 text-emerald-700"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v16.5m0-16.5h16.5m-16.5 0L19.5 19.5M19.5 3.75v16.5m0-16.5H3.75"/></svg></div><span class="font-medium">Area 2,500 m²</span></div>
                                    <div class="flex items-center space-x-2"><span class="text-emerald-700 font-bold">✓</span> <span>Heavy Load</span></div>
                                    <div class="flex items-center space-x-2"><span class="text-emerald-700 font-bold">✓</span> <span>3 Gate Dock</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 sm:p-8 pt-0">
                            <a href="{{ route('register') }}" class="block w-full text-center bg-slate-900 hover:bg-emerald-800 text-white font-bold py-4 rounded-xl text-xs uppercase tracking-widest transition duration-300">Cek Kalender Jadwal</a>
                        </div>
                    </div>

                    <div class="bg-slate-50 rounded-2xl border border-slate-200/80 overflow-hidden shadow-lg hover:border-emerald-600/40 transition duration-500 group flex flex-col justify-between">
                        <div>
                            <div class="h-60 sm:h-72 bg-slate-200 relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1431540015161-0bf868a2d407?q=80&w=600" alt="Meeting Room" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                            </div>
                            <div class="p-6 sm:p-8">
                                <h3 class="font-bold text-slate-900 text-lg sm:text-xl uppercase tracking-wider font-luxury-title">Summit Executive Room</h3>
                                <p class="text-xs text-emerald-700 font-semibold mt-2 tracking-wide">Rapat Direksi, Simposium & Konferensi Pers</p>
                                <div class="mt-6 sm:mt-8 pt-6 border-t border-slate-200 grid grid-cols-2 gap-4 text-xs text-slate-600">
                                    <div class="flex items-center space-x-2"><div class="w-4 h-4 text-emerald-700"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg></div><span class="font-medium">s.d 150 Pax</span></div>
                                    <div class="flex items-center space-x-2"><div class="w-4 h-4 text-emerald-700"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v16.5m0-16.5h16.5m-16.5 0L19.5 19.5M19.5 3.75v16.5m0-16.5H3.75"/></svg></div><span class="font-medium">Area 120 m²</span></div>
                                    <div class="flex items-center space-x-2"><span class="text-emerald-700 font-bold">✓</span> <span>Smartboard</span></div>
                                    <div class="flex items-center space-x-2"><span class="text-emerald-700 font-bold">✓</span> <span>Tracking Mic</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 sm:p-8 pt-0">
                            <a href="{{ route('register') }}" class="block w-full text-center bg-slate-900 hover:bg-emerald-800 text-white font-bold py-4 rounded-xl text-xs uppercase tracking-widest transition duration-300">Cek Kalender Jadwal</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="floorplan" class="py-24 sm:py-36 bg-gradient-to-br from-emerald-950 via-slate-900 to-emerald-950 text-white border-t border-b border-white/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                    <div class="lg:col-span-5 space-y-6">
                        <span class="text-xs font-bold text-amber-400 uppercase tracking-widest block">Spatial Layout</span>
                        <h2 class="text-2xl sm:text-4xl font-black text-white uppercase tracking-wider font-luxury-title leading-tight">Fleksibilitas Denah & Tata Ruang</h2>
                        <div class="h-[2px] w-12 bg-amber-400 rounded"></div>
                        <p class="text-slate-300 text-xs sm:text-base font-light leading-relaxed">Kami menyediakan opsi kustomisasi tata letak tempat duduk yang diselaraskan dengan jenis agenda Anda. Pilih konfigurasi modular terbaik sesuai kenyamanan arus mobilisasi tamu.</p>
                        <div class="space-y-3 pt-4">
                            <div class="flex items-center justify-between p-4 bg-slate-900/60 border border-white/10 rounded-xl text-xs"><span class="font-bold text-white uppercase tracking-wider">Theater Setup</span> <span class="text-amber-400 font-semibold">Kapasitas Maksimal 100%</span></div>
                            <div class="flex items-center justify-between p-4 bg-slate-900/60 border border-white/10 rounded-xl text-xs"><span class="font-bold text-white uppercase tracking-wider">Round Table Banquet</span> <span class="text-amber-400 font-semibold">Kapasitas Maksimal 65%</span></div>
                            <div class="flex items-center justify-between p-4 bg-slate-900/60 border border-white/10 rounded-xl text-xs"><span class="font-bold text-white uppercase tracking-wider">Classroom & Workshop</span> <span class="text-amber-400 font-semibold">Kapasitas Maksimal 50%</span></div>
                        </div>
                    </div>
                    <div class="lg:col-span-7 bg-slate-900/40 p-4 sm:p-8 rounded-2xl border border-white/10 shadow-2xl grid grid-cols-1 sm:grid-cols-2 gap-4 relative backdrop-blur-sm">
                        <div class="border border-dashed border-white/20 p-6 rounded-xl flex flex-col justify-between h-36 sm:h-44 bg-slate-950/40"><span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Zone A</span><h4 class="text-sm font-bold text-white uppercase tracking-wider font-luxury-title">Main Stage & Backstage Area</h4></div>
                        <div class="border border-dashed border-white/20 p-6 rounded-xl flex flex-col justify-between h-36 sm:h-44 bg-slate-950/40"><span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Zone B</span><h4 class="text-sm font-bold text-white uppercase tracking-wider font-luxury-title">VIP Seating & Lounge Area</h4></div>
                        <div class="border border-dashed border-white/20 p-6 rounded-xl flex flex-col justify-between h-36 sm:h-44 bg-slate-950/40"><span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Zone C</span><h4 class="text-sm font-bold text-white uppercase tracking-wider font-luxury-title">Audience & Banquet Area</h4></div>
                        <div class="border border-dashed border-white/20 p-6 rounded-xl flex flex-col justify-between h-36 sm:h-44 bg-slate-950/40"><span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Zone D</span><h4 class="text-sm font-bold text-white uppercase tracking-wider font-luxury-title">Foyer & Registration Desk</h4></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="packages" class="py-24 sm:py-36 bg-slate-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24">
                    <span class="text-xs font-bold text-emerald-700 uppercase tracking-[0.25em] block mb-3">All-In Custom Solutions</span>
                    <h2 class="text-2xl sm:text-5xl font-black text-slate-900 uppercase tracking-wider font-luxury-title">Paket Layanan Integrasi</h2>
                    <div class="h-[2px] w-20 bg-gradient-to-r from-transparent via-amber-500 to-transparent mx-auto mt-6"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="border border-slate-200 rounded-2xl p-6 sm:p-8 bg-white shadow-xl flex flex-col justify-between relative group hover:border-emerald-600/30 transition duration-300">
                        <div>
                            <h4 class="text-slate-900 font-bold text-lg uppercase tracking-wider font-luxury-title">Corporate Summit Pack</h4>
                            <p class="text-slate-500 text-xs mt-2 font-light">Paket integrasi rapat korporasi eksklusif berorientasi kenyamanan penuh.</p>
                            <ul class="mt-8 space-y-4 text-xs text-slate-600 font-medium">
                                <li class="flex items-center"><span class="text-emerald-600 mr-3">✓</span> Penggunaan Ruangan s.d 8 Jam</li>
                                <li class="flex items-center"><span class="text-emerald-600 mr-3">✓</span> 2x Coffee Break & 1x Lunch Buffet</li>
                                <li class="flex items-center"><span class="text-emerald-600 mr-3">✓</span> Sound Standar & 2 Wireless Mic</li>
                                <li class="flex items-center"><span class="text-emerald-600 mr-3">✓</span> Internet Dedicated 100 Mbps</li>
                            </ul>
                        </div>
                        <div class="mt-10 border-t border-slate-100 pt-6">
                            <span class="block text-slate-400 text-[9px] font-bold uppercase tracking-widest">Investasi Mulai</span>
                            <span class="text-2xl font-bold text-emerald-800 font-luxury-title">Rp 350.000</span> <span class="text-xs text-slate-500">/ Pax</span>
                        </div>
                    </div>
                    <div class="border-2 border-amber-500 rounded-2xl p-6 sm:p-8 bg-gradient-to-br from-emerald-900 via-slate-900 to-emerald-950 text-white shadow-2xl flex flex-col justify-between relative mt-4 md:mt-0">
                        <span class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-gradient-to-r from-amber-400 to-amber-500 text-slate-950 text-[9px] font-black uppercase px-5 py-1.5 rounded-full tracking-widest shadow-lg whitespace-nowrap">The Imperial Signature</span>
                        <div>
                            <h4 class="text-amber-400 font-bold text-xl uppercase tracking-wider font-luxury-title">Royal Wedding Package</h4>
                            <p class="text-slate-300 text-xs mt-2 font-light">Mewujudkan pernikahan megah impian dengan tata kelola bintang lima.</p>
                            <ul class="mt-8 space-y-4 text-xs text-slate-200 font-light">
                                <li class="flex items-center"><span class="text-amber-400 mr-3">✓</span> Sewa Grand Ballroom s.d 6 Jam</li>
                                <li class="flex items-center"><span class="text-amber-400 mr-3">✓</span> Pilihan Katering Premium 1.000 Pax</li>
                                <li class="flex items-center"><span class="text-amber-400 mr-3">✓</span> Dekorasi Pelaminan & Grand Entrance</li>
                                <li class="flex items-center"><span class="text-amber-400 mr-3">✓</span> Sound Concert & LED Wall 4x8m</li>
                                <li class="flex items-center"><span class="text-amber-400 mr-3">✓</span> Free 1 Kamar Executive Suite</li>
                            </ul>
                        </div>
                        <div class="mt-10 border-t border-white/5 pt-6">
                            <span class="block text-amber-400 text-[9px] font-bold uppercase tracking-widest">Konfirmasi Harga</span>
                            <span class="text-2xl font-bold text-amber-400 font-luxury-title">Hubungi Kami</span>
                        </div>
                    </div>
                    <div class="border border-slate-200 rounded-2xl p-6 sm:p-8 bg-white shadow-xl flex flex-col justify-between relative group hover:border-emerald-600/30 transition duration-300 md:col-span-2 lg:col-span-1">
                        <div>
                            <h4 class="text-slate-900 font-bold text-lg uppercase tracking-wider font-luxury-title">Grand Exhibition Pack</h4>
                            <p class="text-slate-500 text-xs mt-2 font-light">Sistem operasional eksibisi skala besar dengan pasokan daya tinggi.</p>
                            <ul class="mt-8 space-y-4 text-xs text-slate-600 font-medium">
                                <li class="flex items-center"><span class="text-emerald-600 mr-3">✓</span> Sewa Ruang Hall Terbuka (24 Jam)</li>
                                <li class="flex items-center"><span class="text-emerald-600 mr-3">✓</span> Akses Loading Barang Malam Hari</li>
                                <li class="flex items-center"><span class="text-emerald-600 mr-3">✓</span> Alokasi Listrik Panel Distribusi</li>
                                <li class="flex items-center"><span class="text-emerald-600 mr-3">✓</span> Security & Cleaning Service 24 Jam</li>
                            </ul>
                        </div>
                        <div class="mt-10 border-t border-slate-100 pt-6">
                            <span class="block text-slate-400 text-[9px] font-bold uppercase tracking-widest">Investasi Mulai</span>
                            <span class="text-2xl font-bold text-emerald-800 font-luxury-title">Rp 75 Juta</span> <span class="text-xs text-slate-400">/ Hari</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="amenities" class="py-24 sm:py-36 bg-slate-900 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24">
                    <span class="text-xs font-bold text-emerald-400 uppercase tracking-[0.25em] block mb-3">VIP Hospitality</span>
                    <h2 class="text-2xl sm:text-5xl font-black text-white uppercase tracking-wider font-luxury-title">Fasilitas Eksklusif Penunjang</h2>
                    <div class="h-[2px] w-20 bg-gradient-to-r from-transparent via-amber-400 to-transparent mx-auto mt-6"></div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                    <div class="bg-slate-950 p-6 sm:p-8 rounded-2xl border border-white/5 text-center group hover:border-emerald-500/30 transition duration-300 shadow-xl flex flex-col items-center">
                        <div class="w-10 h-10 text-amber-400 mb-4"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499c.173-.434.764-.434.938 0l2.35 4.765a1.125 1.125 0 00.847.616l5.253.762c.47.068.657.646.317.974l-3.8 3.704a1.125 1.125 0 00-.325.999l.897 5.232c.09.526-.455.922-.923.675l-4.7-2.47a1.125 1.125 0 00-1.014 0l-4.7 2.47c-.468.247-1.014-.149-.923-.675l.897-5.232a1.125 1.125 0 00-.325-.999l-3.8-3.704c-.34-.327-.152-.906.317-.974l5.254-.762a1.125 1.125 0 00.847-.616l2.35-4.765z"/></svg></div>
                        <h4 class="text-white font-bold font-luxury-title uppercase tracking-wider text-sm">VIP Holding Room</h4>
                        <p class="text-slate-400 text-xs mt-3 font-light leading-relaxed">Ruang transit privat mewah yang dilengkapi dengan sofa premium, rest room internal, dan akses lift khusus ajudan.</p>
                    </div>
                    <div class="bg-slate-950 p-6 sm:p-8 rounded-2xl border border-white/5 text-center group hover:border-emerald-500/30 transition duration-300 shadow-xl flex flex-col items-center">
                        <div class="w-10 h-10 text-amber-400 mb-4"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m16.5-18v18m-13.5-16.5h10.5m-10.5 3h10.5m-10.5 3h10.5m-10.5 3h10.5"/></svg></div>
                        <h4 class="text-white font-bold font-luxury-title uppercase tracking-wider text-sm">Pre-Function Foyer</h4>
                        <p class="text-slate-400 text-xs mt-3 font-light leading-relaxed">Area lorong depan yang sangat luas, ideal untuk kebutuhan registrasi tamu, coffee break session, maupun booth pers.</p>
                    </div>
                    <div class="bg-slate-950 p-6 sm:p-8 rounded-2xl border border-white/5 text-center group hover:border-emerald-500/30 transition duration-300 shadow-xl flex flex-col items-center">
                        <div class="w-10 h-10 text-amber-400 mb-4"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5"/></svg></div>
                        <h4 class="text-white font-bold font-luxury-title uppercase tracking-wider text-sm">Control Room Mezzanine</h4>
                        <p class="text-slate-400 text-xs mt-3 font-light leading-relaxed">Ruang kendali sound, multimedia, dan lighting terisolasi di lantai atas untuk menjamin eksekusi acara bebas gangguan.</p>
                    </div>
                    <div class="bg-slate-950 p-6 sm:p-8 rounded-2xl border border-white/5 text-center group hover:border-emerald-500/30 transition duration-300 shadow-xl flex flex-col items-center">
                        <div class="w-10 h-10 text-amber-400 mb-4"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg></div>
                        <h4 class="text-white font-bold font-luxury-title uppercase tracking-wider text-sm">100% Power Back-Up</h4>
                        <p class="text-slate-400 text-xs mt-3 font-light leading-relaxed">Sistem kelistrikan genset ganda otomatis tersinkronisasi tanpa jeda kedip jika terjadi gangguan pasokan daya utama listrik kota.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="virtual-tour" class="py-24 sm:py-36 bg-slate-50 border-b border-slate-200">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-xs font-bold text-emerald-700 uppercase tracking-[0.25em] block mb-2">Video Experience Placeholder</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 uppercase tracking-wider font-luxury-title">Laravel Official Showcase Tour</h2>
                    <div class="h-[2px] w-12 bg-amber-500 mx-auto mt-4 rounded"></div>
                    <p class="mt-6 text-xs sm:text-sm text-slate-600 font-light">Saksikan visualisasi real-time sistem arsitektur, integrasi teknologi digital, dan atmosfer fungsional melalui video dokumentasi resmi dari Laravel berikut.</p>
                </div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-300/80 bg-slate-950 aspect-video">
                    <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/ImtZ5yENzgE" title="Laravel Worldwide Official Video Showcase" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <section id="faq" class="py-24 sm:py-36 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 sm:mb-24">
                    <span class="text-xs font-bold text-emerald-700 uppercase tracking-widest block mb-2">Frequently Asked Questions</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 uppercase tracking-wider font-luxury-title">Pertanyaan Umum Informasi</h2>
                    <div class="h-[2px] w-12 bg-amber-500 mx-auto mt-4 rounded"></div>
                </div>

                <div class="space-y-5">
                    <div class="p-6 border border-slate-200 rounded-xl bg-slate-50 hover:bg-slate-100/50 transition shadow-sm">
                        <h4 class="font-bold text-slate-900 text-sm sm:text-base uppercase tracking-wider font-luxury-title">Bagaimana sistem durasi penyewaan gedung?</h4>
                        <p class="text-xs sm:text-sm text-slate-600 mt-3 font-light leading-relaxed">Sewa reguler dihitung per-sesi (6 jam pemakaian) atau *full day* (12 jam pemakaian). Waktu tunggu persiapan (*set-up*) dekorasi diberikan bebas biaya tambahan selama 4 jam sebelum acara dimulai.</p>
                    </div>
                    <div class="p-6 border border-slate-200 rounded-xl bg-slate-50 hover:bg-slate-100/50 transition shadow-sm">
                        <h4 class="font-bold text-slate-900 text-sm sm:text-base uppercase tracking-wider font-luxury-title">Apakah sudah termasuk rekanan katering & dekorasi?</h4>
                        <p class="text-xs sm:text-sm text-slate-600 mt-3 font-light leading-relaxed">Ya, kami memiliki daftar mitra vendor katering, dekorasi, dokumentasi, dan *wedding organizer* berlisensi. Penggunaan vendor di luar rekanan resmi akan dikenakan biaya *charge* proporsional khusus.</p>
                    </div>
                    <div class="p-6 border border-slate-200 rounded-xl bg-slate-50 hover:bg-slate-100/50 transition shadow-sm">
                        <h4 class="font-bold text-slate-900 text-sm sm:text-base uppercase tracking-wider font-luxury-title">Bagaimana kebijakan perubahan jadwal booking?</h4>
                        <p class="text-xs sm:text-sm text-slate-600 mt-3 font-light leading-relaxed">Perubahan tanggal atau *reschedule* dapat diajukan selambat-lambatnya 45 hari sebelum tanggal acara utama, hal ini bergantung pada ketersediaan jadwal kosong di dashboard booking kami.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 sm:py-24 bg-slate-50 border-t border-slate-200/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <span class="block text-center text-[10px] sm:text-[11px] font-bold text-slate-400 uppercase tracking-[0.3em] mb-12 sm:mb-16">
                    Telah Dipercaya Oleh Perusahaan & Instansi Terkemuka
                </span>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-8 sm:gap-12 items-center justify-items-center">
                    <div class="h-20 sm:h-24 w-full flex items-center justify-center filter grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="{{ asset('images/logobjsm.jpeg') }}" alt="Logo Company 1" class="max-h-full w-auto object-contain">
                    </div>
                    <div class="h-20 sm:h-24 w-full flex items-center justify-center filter grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="{{ asset('images/logobjsm.jpeg') }}" alt="Logo Company 2" class="max-h-full w-auto object-contain">
                    </div>
                    <div class="h-20 sm:h-24 w-full flex items-center justify-center filter grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="{{ asset('images/logobjsm.jpeg') }}" alt="Logo Company 3" class="max-h-full w-auto object-contain">
                    </div>
                    <div class="h-20 sm:h-24 w-full flex items-center justify-center filter grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-300">
                        <img src="{{ asset('images/logobjsm.jpeg') }}" alt="Logo Company 4" class="max-h-full w-auto object-contain">
                    </div>
                    <div class="h-20 sm:h-24 w-full flex items-center justify-center filter grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-300 col-span-2 md:col-span-1">
                        <img src="{{ asset('images/logobjsm.jpeg') }}" alt="Logo Company 5" class="max-h-full w-auto object-contain">
                    </div>
                </div>
            </div>
        </section>

        @include('components.footer')

        <div x-show="welcomeTerms" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md">
            
            <div x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="bg-white text-slate-800 w-full max-w-3xl rounded-2xl shadow-2xl flex flex-col max-h-[85vh] border border-slate-200">
                
                <div class="p-6 border-b border-slate-200 flex items-center justify-between bg-slate-50 rounded-t-2xl">
                    <div>
                        <h3 class="text-slate-900 font-bold text-lg uppercase tracking-wider font-luxury-title">Terms & Conditions</h3>
                        <p class="text-[10px] text-slate-500 uppercase tracking-widest font-semibold mt-1">Syarat & Ketentuan Sewa Gedung Grand Venue</p>
                    </div>
                </div>

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
                        <p>Penyewa wajib menyetorkan *Security Deposit* bersamaan dengan pembayaran pelunasan. Uang jaminan ini akan dikembalikan secara penuh maksimal <strong>7 (tujuh) hari kerja</strong> setelah acara selesai, dengan catatan tidak ditemukan kerusakan asset atau pelanggaran aturan operasional oleh Penyewa maupun vendor terkait.</p>
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
                        <p>Jumlah tamu dan kru tidak boleh melebihi batas kapasitas maksimal aman ruangan yang telah disepakati untuk menjaga keselamatan bersama. Penyewa beserta pihak ketiga dilarang keras membawa senjata api, senjata tajam, obat-obatan terlarang, serta melakukan aktivitas yang melanggar hukum RI di lingkungan Grand Venue.</p>
                    </section>

                    <section class="space-y-2">
                        <h5 class="font-bold text-slate-900 uppercase tracking-wider">8. Tanggung Jawab & Force Majeure</h5>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Penyewa bertanggung jawab penuh atas hilangnya barang pribadi milik tamu undangan atau kru selama acara berlangsung.</li>
                            <li>Pihak Grand Venue dibebaskan dari tuntutan hukum jika terjadi kegagalan atau penundaan acara yang disebabkan oleh keadaan darurat di luar kendali manusia (*Force Majeure*), termasuk bencana alam, kebakaran, huru-hara, pemadaman listrik massal kota, atau kebijakan pembatasan resmi dari pemerintah.</li>
                        </ul>
                    </section>

                </div>

                <div class="p-5 bg-slate-50 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4 rounded-b-2xl">
                    <label class="flex items-center space-x-3 cursor-pointer select-none w-full sm:w-auto">
                        <input type="checkbox" 
                               x-model="isWelcomeAgreed" 
                               class="w-5 h-5 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500/30 accent-emerald-600 transition duration-150">
                        <span class="text-xs sm:text-sm text-slate-700 font-medium">
                            Saya menyetujui seluruh syarat & ketentuan di atas
                        </span>
                    </label>

                    <button @click="welcomeTerms = false" 
                            :disabled="!isWelcomeAgreed"
                            :class="isWelcomeAgreed ? 'bg-emerald-700 hover:bg-emerald-600 text-white cursor-pointer' : 'bg-slate-300 text-slate-500 cursor-not-allowed'"
                            class="w-full sm:w-auto font-bold text-xs uppercase tracking-widest px-6 py-3.5 rounded-xl transition-all duration-300 shadow">
                        Saya Mengerti
                    </button>
                </div>

            </div>
        </div>

    </div>

</body>
</html>