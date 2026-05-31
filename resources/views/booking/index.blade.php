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

    <div x-data="{ welcomeTerms: false, isWelcomeAgreed: true }">

        @include('components.navbar')

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

        <section id="investment-table" class="py-24 bg-white relative z-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                    
                    <div class="lg:col-span-5 space-y-6">
                        <div>
                            <span class="text-xs font-bold text-emerald-700 uppercase tracking-[0.25em] block mb-2">Exclusive Passes</span>
                            <div class="h-[2px] w-12 bg-amber-500 mb-4"></div>
                        </div>

                        <h2 class="text-2xl sm:text-3xl font-black text-slate-900 uppercase tracking-wider font-luxury-title leading-tight">
                            BJSM Grand Venue <br>Access Ticket
                        </h2>

                        <div class="space-y-4">
                            <h3 class="font-bold text-slate-800 text-xs sm:text-sm tracking-wider uppercase font-luxury-title">
                                Full Day Access Ticket Option Includes:
                            </h3>
                            <ul class="space-y-2.5 text-xs sm:text-sm text-slate-600 font-light list-none pl-0">
                                <li class="flex items-start"><span class="text-amber-500 mr-2.5">▪</span> Penggunaan Ballroom / Hall Utama sesuai durasi paket</li>
                                <li class="flex items-start"><span class="text-amber-500 mr-2.5">▪</span> Slot waktu gladi resik & persiapan teknis (*Technical Rehearsal*)</li>
                                <li class="flex items-start"><span class="text-amber-500 mr-2.5">▪</span> Standarisasi sistem akustik dan kedap suara ruang bertaraf internasional</li>
                                <li class="flex items-start"><span class="text-amber-500 mr-2.5">▪</span> Integrasi perangkat visual multimedia premium (LED Wall 4K Screen)</li>
                                <li class="flex items-start"><span class="text-amber-500 mr-2.5">▪</span> Akses transit eksklusif di VIP Holding Rooms & Suites Room</li>
                                <li class="flex items-start"><span class="text-amber-500 mr-2.5">▪</span> Layanan hospitality bintang lima dari tim operasional BJSM</li>
                            </ul>
                        </div>

                        <div class="space-y-3 pt-5 border-t border-slate-200">
                            <h4 class="font-bold text-slate-800 text-xs tracking-wide uppercase">
                                Additionally for Premium Integration Bundles:
                            </h4>
                            <ul class="space-y-2 text-xs text-slate-500 font-light list-none pl-0">
                                <li class="flex items-start"><span class="text-emerald-600 mr-2.5">▪</span> Publikasi banner digital promosi agenda di portal resmi BJSM</li>
                                <li class="flex items-start"><span class="text-emerald-600 mr-2.5">▪</span> Free voucher menginap 1 malam di Suite Room untuk klien utama</li>
                                <li class="flex items-start"><span class="text-emerald-600 mr-2.5">▪</span> Alokasi validasi parkir aman terproteksi hingga maksimal 50 kendaraan</li>
                            </ul>
                        </div>
                    </div>

                    <div class="lg:col-span-7 bg-white border border-slate-200 rounded-2xl shadow-xl overflow-hidden backdrop-blur-sm">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse text-xs sm:text-sm">
                                <thead>
                                    <tr class="bg-slate-950 border-b border-slate-800 text-white">
                                        <th class="p-4 sm:p-5 uppercase tracking-widest font-bold font-luxury-title text-amber-400 text-[11px]">Categories</th>
                                        <th class="p-4 sm:p-5 uppercase tracking-widest font-bold font-luxury-title text-center text-[11px] border-l border-white/5">
                                            Early Bird
                                            <span class="block text-[9px] text-slate-400 font-normal tracking-tight normal-case mt-0.5">(before 31 March 2026)</span>
                                        </th>
                                        <th class="p-4 sm:p-5 uppercase tracking-widest font-bold font-luxury-title text-center text-[11px] border-l border-white/5">
                                            Full Price
                                            <span class="block text-[9px] text-slate-400 font-normal tracking-tight normal-case mt-0.5">(after 31 March 2026)</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 text-slate-700 font-medium">
                                    
                                    <tr class="bg-slate-900 text-amber-400 font-bold text-center uppercase tracking-widest font-luxury-title text-[10px] sm:text-xs">
                                        <td colspan="3" class="py-2.5 border-t border-b border-slate-800">International Pack (USD)</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 transition">
                                        <td class="p-4 sm:p-5 font-semibold text-slate-900">General Admissions</td>
                                        <td class="p-4 sm:p-5 text-center text-slate-600 border-l border-slate-100 font-mono">USD 250</td>
                                        <td class="p-4 sm:p-5 text-center text-slate-600 border-l border-slate-100 font-mono">USD 290</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 transition">
                                        <td class="p-4 sm:p-5 font-semibold text-slate-900">Corporate & Association</td>
                                        <td class="p-4 sm:p-5 text-center text-slate-600 border-l border-slate-100 font-mono">USD 180</td>
                                        <td class="p-4 sm:p-5 text-center text-slate-600 border-l border-slate-100 font-mono">USD 220</td>
                                    </tr>
                                    <tr class="bg-slate-50/60 italic text-[11px] text-slate-400 text-center">
                                        <td colspan="3" class="px-4 py-2 border-t border-b border-slate-200">
                                            *20% General admissions discount for International Association Members
                                        </td>
                                    </tr>

                                    <tr class="bg-slate-900 text-amber-400 font-bold text-center uppercase tracking-widest font-luxury-title text-[10px] sm:text-xs">
                                        <td colspan="3" class="py-2.5 border-t border-b border-slate-800">Indonesians Pack (IDR)</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 transition">
                                        <td class="p-4 sm:p-5 font-semibold text-slate-900">General Admissions / Umum</td>
                                        <td class="p-4 sm:p-5 text-center text-slate-600 border-l border-slate-100 font-mono">IDR 3,000,000</td>
                                        <td class="p-4 sm:p-5 text-center text-slate-600 border-l border-slate-100 font-mono">IDR 3,500,000</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 transition">
                                        <td class="p-4 sm:p-5 font-semibold text-slate-900">Instansi Pemerintah / Mahasiswa</td>
                                        <td class="p-4 sm:p-5 text-center text-slate-600 border-l border-slate-100 font-mono">IDR 2,200,000</td>
                                        <td class="p-4 sm:p-5 text-center text-slate-600 border-l border-slate-100 font-mono">IDR 2,600,000</td>
                                    </tr>
                                    <tr class="bg-slate-50/60 italic text-[11px] text-slate-400 text-center">
                                        <td colspan="3" class="px-4 py-2 border-t border-slate-200">
                                            *20% General admissions discount for Ikatan Arsitek Indonesia (IAI) & Partner Members
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        
                        <div class="p-5 bg-slate-50 border-t border-slate-200 text-[11px] text-slate-500 font-light flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2">
                            <p>* Seluruh harga di atas belum termasuk pengenaan PPN sesuai regulasi pemerintah.</p>
                            <p class="text-emerald-700 font-semibold">✓ Include Garansi Kelistrikan Genset Ganda 100%</p>
                        </div>
                    </div>

                </div> </div> </section>

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

    </div>

</body>
</html>