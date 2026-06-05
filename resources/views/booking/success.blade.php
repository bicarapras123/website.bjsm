<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation Success - BJSM Venue</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;900&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .font-luxury-title { font-family: 'Cinzel', serif; }
        .font-luxury-body { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="antialiased font-luxury-body bg-slate-950 text-slate-100 min-h-screen flex flex-col justify-between">

    @include('components.navbar')

    <main class="flex-grow flex items-center justify-center px-4 sm:px-6 lg:px-8 pt-36 pb-24 relative z-10">
        <div class="max-w-2xl w-full bg-slate-900/80 border border-white/10 p-6 sm:p-10 rounded-2xl shadow-2xl backdrop-blur-md">
            
            <div class="text-center mb-8">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-emerald-500/10 border border-emerald-500/30 mb-4">
                    <svg class="h-8 w-8 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h1 class="text-xl sm:text-2xl font-black uppercase tracking-wider text-white font-luxury-title">
                    Reservasi Berhasil Dikirim
                </h1>
                <p class="text-amber-400 text-[10px] uppercase tracking-[0.2em] font-bold mt-1">
                    Booking Securely Registered
                </p>
            </div>

            @if(session('booking_data'))
                <div class="bg-white border-2 border-slate-700 rounded-xl overflow-hidden shadow-lg mb-6">
                    <div class="bg-slate-900 text-amber-400 px-4 py-3 border-b border-slate-700">
                        <h4 class="text-xs font-bold uppercase tracking-wider font-luxury-title">Ringkasan Formulir Reservasi Anda</h4>
                    </div>
                    <div class="divide-y divide-slate-200 text-slate-900 text-sm">
                        
                        <div class="p-4 bg-slate-50">
                            <span class="text-[10px] font-bold uppercase text-slate-400 block tracking-wider mb-2">01. Informasi PIC</span>
                            <div class="grid grid-cols-2 gap-2">
                                <div><strong class="text-xs text-slate-500">Nama PIC:</strong> <p class="font-semibold">{{ session('booking_data')['customer_name'] }}</p></div>
                                <div><strong class="text-xs text-slate-500">WhatsApp:</strong> <p class="font-semibold">{{ session('booking_data')['customer_phone'] }}</p></div>
                                <div class="col-span-2 mt-1"><strong class="text-xs text-slate-500">Email:</strong> <p class="font-semibold">{{ session('booking_data')['customer_email'] }}</p></div>
                                @if(!empty(session('booking_data')['company_or_organization']))
                                    <div class="col-span-2 mt-1"><strong class="text-xs text-slate-500">Instansi/Perusahaan:</strong> <p class="font-semibold">{{ session('booking_data')['company_or_organization'] }}</p></div>
                                @endif
                            </div>
                        </div>

                        <div class="p-4">
                            <span class="text-[10px] font-bold uppercase text-slate-400 block tracking-wider mb-2">02. Detail Agenda</span>
                            <div class="space-y-2">
                                <div><strong class="text-xs text-slate-500">Judul Acara:</strong> <p class="font-semibold text-amber-700">{{ session('booking_data')['event_title'] }}</p></div>
                                <div class="grid grid-cols-3 gap-2 pt-1">
                                    <div><strong class="text-xs text-slate-500">Tanggal:</strong> <p class="font-semibold">{{ session('booking_data')['event_date'] }}</p></div>
                                    <div><strong class="text-xs text-slate-500">Jam Mulai:</strong> <p class="font-semibold">{{ session('booking_data')['start_time'] }}</p></div>
                                    <div><strong class="text-xs text-slate-500">Jam Selesai:</strong> <p class="font-semibold">{{ session('booking_data')['end_time'] }}</p></div>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 bg-slate-50">
                            <span class="text-[10px] font-bold uppercase text-slate-400 block tracking-wider mb-2">03. Logistik & Fasilitas</span>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <div><strong class="text-xs text-slate-500">Kategori Paket:</strong> <p class="font-bold text-slate-900">{{ session('booking_data')['venue_package'] }}</p></div>
                                <div><strong class="text-xs text-slate-500">Jumlah Tamu:</strong> <p class="font-semibold">{{ session('booking_data')['total_pax'] }} Pax</p></div>
                                <div><strong class="text-xs text-slate-500">Susunan Kursi:</strong> <p class="font-semibold">{{ session('booking_data')['room_layout'] }}</p></div>
                            </div>
                            @if(!empty(session('booking_data')['notes']))
                                <div class="mt-3 pt-2 border-t border-slate-200">
                                    <strong class="text-xs text-slate-500">Catatan Khusus:</strong> 
                                    <p class="italic text-xs text-slate-700 bg-white p-2 rounded border mt-1">{{ session('booking_data')['notes'] }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            <div class="mb-8">
                <a href="#" class="w-full flex items-center justify-center bg-amber-500 hover:bg-amber-600 text-slate-950 font-black px-10 py-4 rounded-xl text-xs uppercase tracking-[0.2em] transition duration-300 shadow-xl shadow-amber-500/10 hover:shadow-amber-500/20">
                    Segera Lanjutkan Pembayaran
                </a>
            </div>

            <p class="text-[11px] text-slate-400 text-center leading-relaxed mt-4">
                Konfirmasi resmi, kesepakatan kerjasama, beserta link invoice pembayaran akan dikirimkan ke email Anda oleh tim *Hospitality & Sales* kami dalam waktu maksimal 1x24 jam.
            </p>

        </div>
    </main>

    @include('components.footer')

</body>
</html>