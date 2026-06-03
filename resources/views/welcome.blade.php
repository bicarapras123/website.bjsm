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

    @include('components.navbar')

    <!-- HERO HEADER -->
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
                Sewa ruang rapat korporat eksklusif hingga aula eksibisi masif dengan penataan modular pintar, integrasi teknologi multimedia canggih, dan sistem pelayanan hospitality kelas dunia.
            </p>
            
            <div class="mt-10 sm:mt-12 flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-5 w-full max-w-md mx-auto sm:max-w-none">
                <a href="#spaces" class="w-full sm:w-auto bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold px-10 py-4 sm:py-5 rounded-xl text-xs uppercase tracking-widest transition duration-300 shadow-2xl text-center">
                    Pilihan Layout Ruangan
                </a>
                <a href="{{ route('booking.index') }}" class="w-full sm:w-auto bg-transparent border border-slate-700 hover:border-amber-400 text-slate-300 hover:text-white font-bold px-10 py-4 sm:py-5 rounded-xl text-xs uppercase tracking-widest transition duration-300 text-center backdrop-blur-sm">
                    Booking Jadwal Gedung
                </a>
            </div>
        </div>
    </section>

    <!-- STATS BANNER SECTION -->
    <section class="relative z-20 -mt-16 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 bg-white border border-slate-200/60 p-6 sm:p-8 rounded-2xl shadow-2xl text-center">
            <div class="p-2 sm:p-4 border-r border-slate-100 last:border-none group flex flex-col items-center">
                <div class="w-6 h-6 sm:w-8 sm:h-8 text-emerald-700 mb-2 group-hover:scale-110 transition duration-300">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.65-2.42 9.094 9.094 0 00-5.182 0 3 3 0 00-4.65 2.42 9.094 9.094 0 003.741.479m12.118-.479a9.047 9.047 0 00-11.236 0m11.236 0a9.047 9.047 0 01-11.236 0m11.236 0V17.25c0-1.657-1.343-3-3-3h-1.318a4.5 4.5 0 00-4.5 4.5v1.471m12.118-.479A9.047 9.047 0 0012 15.75c-2.316 0-4.428.868-6.031 2.292m0 0a9.047 9.047 0 0111.236 0M3.01 18.72a9.094 9.094 0 013.741-.479 3 3 0 01-4.65-2.42 9.094 9.094 0 015.182 0 3 3 0 014.65 2.42 9.094 9.094 0 01-3.741.479m-12.118-.479a9.047 9.047 0 0111.236 0M3.01 18.72a9.047 9.047 0 0011.236 0M3.01 18.72V17.25c0-1.657-1.343-3-3-3h-1.318a4.5 4.5 0 014.5 4.5v1.471M5.969 18.72A9.047 9.047 0 0112 15.75c2.316 0 4.428.868-6.031 2.292m0 0V17.25a4.5 4.5 0 00-4.5-4.5H10.5a4.5 4.5 0 00-4.5 4.5v1.47M12 12a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"/></svg>
                </div>
                <span class="block text-xl sm:text-2xl font-bold text-slate-900 font-luxury-title tracking-wider">1,000+</span>
                <span class="block text-[9px] sm:text-[10px] text-slate-500 font-semibold uppercase tracking-widest mt-2">Kapasitas Maks Rapat</span>
            </div>
            <div class="p-2 sm:p-4 md:border-r border-slate-100 last:border-none group flex flex-col items-center">
                <div class="w-6 h-6 sm:w-8 sm:h-8 text-emerald-700 mb-2 group-hover:scale-110 transition duration-300">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 16.5h1.5m3 0H15"/></svg>
                </div>
                <span class="block text-xl sm:text-2xl font-bold text-slate-900 font-luxury-title tracking-wider">5 Premium</span>
                <span class="block text-[9px] sm:text-[10px] text-slate-500 font-semibold uppercase tracking-widest mt-2">Kategori Paket Meeting</span>
            </div>
            <div class="p-2 sm:p-4 border-r border-slate-100 last:border-none group flex flex-col items-center">
                <div class="w-6 h-6 sm:w-8 sm:h-8 text-emerald-700 mb-2 group-hover:scale-110 transition duration-300">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z"/></svg>
                </div>
                <span class="block text-xl sm:text-2xl font-bold text-slate-900 font-luxury-title tracking-wider">120 dB</span>
                <span class="block text-[9px] sm:text-[10px] text-slate-500 font-semibold uppercase tracking-widest mt-2">Dinding Kedap Suara</span>
            </div>
            <div class="p-2 sm:p-4 last:border-none group flex flex-col items-center">
                <div class="w-6 h-6 sm:w-8 sm:h-8 text-emerald-700 mb-2 group-hover:scale-110 transition duration-300">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.129-1.125V9.75M3.375 11.25h17.25M5.625 6h12.75M3.122 11.25l1.644-4.93A1.875 1.875 0 016.536 5h10.928a1.875 1.875 0 011.77 1.32l1.644 4.93"/></svg>
                </div>
                <span class="block text-xl sm:text-2xl font-bold text-slate-900 font-luxury-title tracking-wider">1,500+</span>
                <span class="block text-[9px] sm:text-[10px] text-slate-500 font-semibold uppercase tracking-widest mt-2">Secure Lahan Parkir</span>
            </div>
        </div>
    </section>

    <!-- SPACES SECTION -->
    <section id="spaces" class="py-24 sm:py-36 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24">
                <span class="text-xs font-bold text-emerald-700 uppercase tracking-[0.25em] block mb-3">Elite Infrastructure</span>
                <h2 class="text-2xl sm:text-5xl font-black text-slate-900 uppercase tracking-wider font-luxury-title">Konfigurasi Ruangan</h2>
                <div class="h-[2px] w-20 bg-gradient-to-r from-transparent via-amber-500 to-transparent mx-auto mt-6"></div>
                <p class="mt-6 text-xs sm:text-base text-slate-600 font-light leading-relaxed">Sistem penataan arsitektur ruang rapat modern yang kondusif. Kami menyediakan tata letak baku yang efisien serta opsi kustomisasi penuh sesuai instruksi operasional Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 max-w-4xl mx-auto">
                
                <!-- RUANGAN TIPE 1: STANDART LAYOUT -->
                <div class="bg-slate-50 rounded-2xl border border-slate-200/80 overflow-hidden shadow-lg hover:border-emerald-600/40 transition duration-500 group flex flex-col justify-between">
                    <div>
                        <div class="h-60 sm:h-72 bg-slate-200 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1431540015161-0bf868a2d407?q=80&w=600" alt="Standart Layout" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                            <span class="absolute top-4 right-4 bg-emerald-800 text-white text-[9px] font-bold uppercase px-4 py-1.5 rounded-full tracking-widest border border-emerald-500/30">Standar Baku</span>
                        </div>
                        <div class="p-6 sm:p-8">
                            <h3 class="font-bold text-slate-900 text-lg sm:text-xl uppercase tracking-wider font-luxury-title">Standart Layout Space</h3>
                            <p class="text-xs text-emerald-700 font-semibold mt-2 tracking-wide">Pilihan Formasi Rapat Bawaan yang Efisien</p>
                            <p class="text-xs text-slate-400 mt-3 leading-relaxed font-light">Konfigurasi meja dan kursi bawaan operasional hospitality gedung. Tersedia pilihan formasi Theater Style (baris kursi rapat tegak), Classroom Style (kombinasi meja panjang), U-Shape, maupun Banquet Round Table.</p>
                            <div class="mt-6 pt-6 border-t border-slate-200 grid grid-cols-2 gap-3 text-xs text-slate-600 font-medium">
                                <div class="flex items-center space-x-2"><span>• Theater Setup</span></div>
                                <div class="flex items-center space-x-2"><span>• Classroom Setup</span></div>
                                <div class="flex items-center space-x-2"><span>• U-Shape Layout</span></div>
                                <div class="flex items-center space-x-2"><span>• Banquet Table</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 pt-0">
                        <a href="{{ route('booking.index') }}" class="block w-full text-center bg-slate-900 hover:bg-emerald-800 text-white font-bold py-4 rounded-xl text-xs uppercase tracking-widest transition duration-300">Pilih Opsi Standart</a>
                    </div>
                </div>

                <!-- RUANGAN TIPE 2: CUSTOM LAYOUT -->
                <div class="bg-slate-50 rounded-2xl border border-slate-200/80 overflow-hidden shadow-lg hover:border-amber-500/40 transition duration-500 group flex flex-col justify-between">
                    <div>
                        <div class="h-60 sm:h-72 bg-slate-200 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=600" alt="Custom Layout" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                            <span class="absolute top-4 right-4 bg-amber-600 text-white text-[9px] font-bold uppercase px-4 py-1.5 rounded-full tracking-widest border border-amber-500/30">Kustomisasi Penuh</span>
                        </div>
                        <div class="p-6 sm:p-8">
                            <h3 class="font-bold text-slate-900 text-lg sm:text-xl uppercase tracking-wider font-luxury-title">Custom Layout Space</h3>
                            <p class="text-xs text-amber-600 font-semibold mt-2 tracking-wide">Konsultasikan Desain Denah Bersama Admin</p>
                            <p class="text-xs text-slate-400 mt-3 leading-relaxed font-light">Formulir penataan ruang bebas terstruktur. Sempurna bagi Anda yang menghendaki dekorasi panggung masif, stand pameran dagang (Exhibition), ruang wisuda, area pertunjukan konser, atau event berskala korporat kompleks lainnya.</p>
                            <div class="mt-6 pt-6 border-t border-slate-200 text-xs text-amber-700 font-semibold bg-amber-50/50 p-3 rounded-xl border border-amber-200/30">
                                📢 Silakan pilih rincian paket custom ini, lalu ketik spesifikasi denah acara impian Anda pada kolom Catatan Tambahan di halaman form reservasi.
                            </div>
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 pt-0">
                        <a href="https://wa.me/6281234567890" target="_blank" class="block w-full text-center bg-amber-500 hover:bg-amber-600 text-slate-950 font-black py-4 rounded-xl text-xs uppercase tracking-widest transition duration-300">Konsultasi Layout via WhatsApp</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SPATIAL FLOORPLAN ZONE -->
    <section id="floorplan" class="py-24 sm:py-36 bg-gradient-to-br from-emerald-950 via-slate-900 to-emerald-950 text-white border-t border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-5 space-y-6">
                    <span class="text-xs font-bold text-amber-400 uppercase tracking-widest block">Spatial Layout</span>
                    <h2 class="text-2xl sm:text-4xl font-black text-white uppercase tracking-wider font-luxury-title leading-tight">Fleksibilitas Denah & Tata Ruang</h2>
                    <div class="h-[2px] w-12 bg-amber-400 rounded"></div>
                    <p class="text-slate-300 text-xs sm:text-base font-light leading-relaxed">Penyusunan tata letak modular yang adaptif menjamin kelancaran arus alur mobilisasi tamu dan efektivitas jangkauan visual sistem multimedia selama rapat berlangsung.</p>
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

    <!-- PACKAGES SECTION -->
    <section id="packages" class="py-24 sm:py-36 bg-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24">
                <span class="text-xs font-bold text-emerald-700 uppercase tracking-[0.25em] block mb-3">All-In Corporate Solutions</span>
                <h2 class="text-2xl sm:text-5xl font-black text-slate-900 uppercase tracking-wider font-luxury-title">Paket Rapat Integrasi</h2>
                <div class="h-[2px] w-20 bg-gradient-to-r from-transparent via-amber-500 to-transparent mx-auto mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 items-stretch">
                
                <!-- 1. PAKET SMALL MEETING -->
                <div class="border border-slate-200 rounded-2xl p-6 bg-white shadow-xl flex flex-col justify-between group hover:border-emerald-600/30 transition duration-300">
                    <div class="space-y-3">
                        <h4 class="text-slate-900 font-bold text-base uppercase tracking-wider font-luxury-title">Paket Small Meeting</h4>
                        <p class="text-slate-500 text-xs font-light">Sempurna untuk jajaran rapat direksi, sinkronisasi internal, atau presentasi tertutup berskala kecil.</p>
                        <ul class="space-y-2 text-xs text-slate-600 pt-2 font-medium">
                            <li>✓ Standard Sound Rapat</li>
                            <li>✓ High-Speed Corporate Wi-Fi</li>
                            <li>✓ Mineral Water & Notes Kit</li>
                        </ul>
                    </div>
                    <div class="mt-8 border-t border-slate-100 pt-4">
                        <span class="block text-slate-400 text-[9px] font-bold uppercase tracking-widest">Tarif Sewa</span>
                        <span class="text-xl font-bold text-slate-900 font-mono">Rp 250.000</span> <span class="text-xs text-slate-500">/ Pax</span>
                    </div>
                </div>

                <!-- 2. PAKET HALF DAY MEETING -->
                <div class="border border-slate-200 rounded-2xl p-6 bg-white shadow-xl flex flex-col justify-between group hover:border-emerald-600/30 transition duration-300">
                    <div class="space-y-3">
                        <h4 class="text-slate-900 font-bold text-base uppercase tracking-wider font-luxury-title">Paket Half Day Meeting</h4>
                        <p class="text-slate-500 text-xs font-light">Akses penggunaan ruangan sewa modular dengan alokasi waktu paruh hari maksimal hingga 4 jam.</p>
                        <ul class="space-y-2 text-xs text-slate-600 pt-2 font-medium">
                            <li>✓ Pemakaian Ruang 4 Jam</li>
                            <li>✓ 1x Coffee Break Premium</li>
                            <li>✓ Proyektor / Smart TV Support</li>
                        </ul>
                    </div>
                    <div class="mt-8 border-t border-slate-100 pt-4">
                        <span class="block text-slate-400 text-[9px] font-bold uppercase tracking-widest">Tarif Sewa</span>
                        <span class="text-xl font-bold text-slate-900 font-mono">Rp 250.000</span> <span class="text-xs text-slate-500">/ Pax</span>
                    </div>
                </div>

                <!-- 3. PAKET FULL DAY MEETING (HIGHLIGHT) -->
                <div class="border-2 border-amber-500 rounded-2xl p-6 bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900 text-white shadow-2xl flex flex-col justify-between relative">
                    <span class="absolute -top-3 left-6 bg-gradient-to-r from-amber-400 to-amber-500 text-slate-950 text-[8px] font-black uppercase px-3 py-1 rounded-full tracking-wider">Terfavorit</span>
                    <div class="space-y-3">
                        <h4 class="text-amber-400 font-bold text-base uppercase tracking-wider font-luxury-title">Paket Full Day Meeting</h4>
                        <p class="text-slate-300 text-xs font-light">Rapat penuh satu hari suntuk berdurasi maksimal 8 jam dilengkapi pasokan logistik kuliner banquet komplit.</p>
                        <ul class="space-y-2 text-xs text-slate-200 pt-2 font-light">
                            <li>✓ Pemakaian Ruang 8 Jam</li>
                            <li>✓ 2x Coffee Break Premium</li>
                            <li>✓ 1x Lunch / Dinner Buffet</li>
                        </ul>
                    </div>
                    <div class="mt-8 border-t border-white/5 pt-4">
                        <span class="block text-amber-400 text-[9px] font-bold uppercase tracking-widest">Tarif Sewa</span>
                        <span class="text-xl font-bold text-amber-400 font-mono">Rp 250.000</span> <span class="text-xs text-slate-300">/ Pax</span>
                    </div>
                </div>

                <!-- 4. PAKET FULLBOARD MEETING -->
                <div class="border border-slate-200 rounded-2xl p-6 bg-white shadow-xl flex flex-col justify-between group hover:border-emerald-600/30 transition duration-300">
                    <div class="space-y-3">
                        <h4 class="text-slate-900 font-bold text-base uppercase tracking-wider font-luxury-title">Paket Fullboard Meeting</h4>
                        <p class="text-slate-500 text-xs font-light">Paket koordinasi intensif korporat terpadu yang menyatukan paket rapat harian dan akomodasi menginap.</p>
                        <ul class="space-y-2 text-xs text-slate-600 pt-2 font-medium">
                            <li>✓ Konsolidasi Paket Rapat Intensif</li>
                            <li>✓ Makan Pagi, Siang & Malam</li>
                            <li>✓ Integrasi Kamar Akomodasi</li>
                        </ul>
                    </div>
                    <div class="mt-8 border-t border-slate-100 pt-4">
                        <span class="block text-slate-400 text-[9px] font-bold uppercase tracking-widest">Tarif Sewa</span>
                        <span class="text-xl font-bold text-slate-900 font-mono">Rp 250.000</span> <span class="text-xs text-slate-500">/ Pax</span>
                    </div>
                </div>

                <!-- 5. PAKET CONVENTION CENTRE (CUSTOM) -->
                <div class="border border-slate-200 rounded-2xl p-6 bg-white shadow-xl flex flex-col justify-between group hover:border-amber-500/30 transition duration-300 md:col-span-2 lg:col-span-1">
                    <div class="space-y-3">
                        <h4 class="text-slate-900 font-bold text-base uppercase tracking-wider font-luxury-title">Paket Convention Centre</h4>
                        <p class="text-slate-500 text-xs font-light">Sewa gedung aula skala masif untuk perhelatan wisuda akbar, eksibisi dagang pameran besar, konser, atau gathering akbar.</p>
                        <ul class="space-y-2 text-xs text-slate-600 pt-2 font-medium">
                            <li>✓ Kuota Kapasitas Ribuan Peserta</li>
                            <li>✓ Fleksibilitas Tinggi Panggung</li>
                            <li>✓ Genset Ganda Daya 3-Phase</li>
                        </ul>
                    </div>
                    <div class="mt-8 border-t border-slate-100 pt-4 bg-amber-50/50 p-3 rounded-xl border border-amber-200/20">
                        <span class="block text-amber-600 text-[9px] font-bold uppercase tracking-widest">Skema Tarif</span>
                        <span class="text-base font-bold text-amber-600 uppercase tracking-wide">Hubungi Admin</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- AMENITIES SECTION -->
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

    <!-- VIDEO EXPERIENCE SECTION -->
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

    <!-- FAQ SECTION -->
    <section id="faq" class="py-24 sm:py-36 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 sm:mb-24">
                <span class="text-xs font-bold text-emerald-700 uppercase tracking-widest block mb-2">Frequently Asked Questions</span>
                <h2 class="text-2xl sm:text-3xl font-black text-slate-900 uppercase tracking-wider font-luxury-title">Pertanyaan Umum Informasi</h2>
                <div class="h-[2px] w-12 bg-amber-500 mx-auto mt-4 rounded"></div>
            </div>

            <div class="space-y-5">
                <div class="p-6 border border-slate-200 rounded-xl bg-slate-50 hover:bg-slate-100/50 transition shadow-sm">
                    <h4 class="font-bold text-slate-900 text-sm sm:text-base uppercase tracking-wider font-luxury-title">Bagaimana sistem perhitungan harga paket meeting?</h4>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 font-light leading-relaxed">Harga penawaran flat Rp 250.000 dihitung secara akumulatif dikalikan jumlah Pax (minimal pemesanan berlaku). Biaya tersebut sudah menutup fasilitas utama ruangan beserta pelengkap F&B katering bawaan di dalam rincian paket.</p>
                </div>
                <div class="p-6 border border-slate-200 rounded-xl bg-slate-50 hover:bg-slate-100/50 transition shadow-sm">
                    <h4 class="font-bold text-slate-900 text-sm sm:text-base uppercase tracking-wider font-luxury-title">Apakah ada biaya tambahan untuk perubahan tata letak kursi?</h4>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 font-light leading-relaxed">Tidak ada biaya tambahan untuk penataan model *Standart Layout* (Theater, U-Shape, Classroom, Banquet). Namun, untuk opsi kustom luar batas normal (*Custom Layout*), silakan berkonsultasi terlebih dahulu bersama tim sales admin kami.</p>
                </div>
                <div class="p-6 border border-slate-200 rounded-xl bg-slate-50 hover:bg-slate-100/50 transition shadow-sm">
                    <h4 class="font-bold text-slate-900 text-sm sm:text-base uppercase tracking-wider font-luxury-title">Bagaimana cara menentukan koordinasi denah kustom?</h4>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 font-light leading-relaxed">Anda cukup memilih opsi *Custom Layout* saat pengisian formulir reservasi online, kemudian deskripsikan kebutuhan penataan khusus panggung atau properti Anda secara detail di kolom catatan bawaan form.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TRUSTED BY / CLIENT LOGO BANNER -->
    <section class="py-20 sm:py-24 bg-slate-50 border-t border-slate-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="block text-center text-[10px] sm:text-[11px] font-bold text-slate-400 uppercase tracking-[0.3em] mb-12 sm:mb-16">
                Telah Dipercaya Oleh Perusahaan & Instansi Terkemuka
            </span>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 sm:gap-12 items-center justify-items-center">
                <div class="h-20 sm:h-24 w-full flex items-center justify-center filter grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('images/logobjsm.jpeg') }}" alt="Logo BJSM" class="max-h-full w-auto object-contain">
                </div>
                <div class="h-20 sm:h-24 w-full flex items-center justify-center filter grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('images/logobjsm.jpeg') }}" alt="Logo BJSM" class="max-h-full w-auto object-contain">
                </div>
                <div class="h-20 sm:h-24 w-full flex items-center justify-center filter grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('images/logobjsm.jpeg') }}" alt="Logo BJSM" class="max-h-full w-auto object-contain">
                </div>
                <div class="h-20 sm:h-24 w-full flex items-center justify-center filter grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('images/logobjsm.jpeg') }}" alt="Logo BJSM" class="max-h-full w-auto object-contain">
                </div>
                <div class="h-20 sm:h-24 w-full flex items-center justify-center filter grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-300 col-span-2 md:col-span-1">
                    <img src="{{ asset('images/logobjsm.jpeg') }}" alt="Logo BJSM" class="max-h-full w-auto object-contain">
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

</body>
</html>