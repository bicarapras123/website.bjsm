<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bjsm Venue - Premium Reservation Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;900&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .font-luxury-title { font-family: 'Cinzel', serif; }
        .font-luxury-body { font-family: 'Montserrat', sans-serif; }
        input[type="date"], input[type="time"], select { color: #0f172a !important; font-weight: 600 !important; }
        .method-disabled { opacity: 0.5; filter: grayscale(1); cursor: not-allowed; }
    </style>
</head>
<body class="antialiased font-luxury-body selection:bg-emerald-600 selection:text-white bg-slate-950 text-slate-100">

    <div class="min-h-screen flex flex-col justify-between">
        @include('components.navbar')

        <main class="max-w-4xl mx-auto w-full px-4 sm:px-6 lg:px-8 pt-36 pb-24 relative z-10">
            <div class="text-center mb-12">
                <span class="text-amber-400 font-bold text-[10px] sm:text-xs tracking-[0.3em] uppercase mb-3 bg-amber-400/5 inline-block px-6 py-2 rounded-full border border-amber-400/20 backdrop-blur-sm">Secured Booking Form</span>
                <h1 class="text-2xl sm:text-4xl font-black text-white tracking-wide uppercase font-luxury-title mt-3">Formulir Reservasi <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-500">Venue</span></h1>
            </div>

            <div class="bg-slate-900/80 border border-white/10 rounded-2xl shadow-2xl p-6 sm:p-10 backdrop-blur-md">
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-500/10 border border-red-500/20 rounded-xl text-red-400 text-xs sm:text-sm">
                        <p class="font-bold mb-1">Mohon periksa kembali inputan Anda:</p>
                        <ul class="list-disc list-inside space-y-0.5">
                            @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('booking.store') }}" method="POST" class="space-y-8" id="reservationForm">
                    @csrf
                    <input type="hidden" name="payment_method" id="payment_method">

                    <div class="space-y-4">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 border-b border-white/10 pb-2 font-luxury-title">01. Informasi Kontak Pemesan</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Nama Lengkap PIC</label><input type="text" name="customer_name" value="{{ old('customer_name') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Nomor WhatsApp / HP</label><input type="text" name="customer_phone" value="{{ old('customer_phone') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Alamat Email Resmi</label><input type="email" name="customer_email" value="{{ old('customer_email') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Nama Perusahaan/Organisasi</label><input type="text" name="company_or_organization" value="{{ old('company_or_organization') }}" class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                        </div>
                    </div>

                    <div class="space-y-4 pt-4">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 border-b border-white/10 pb-2 font-luxury-title">02. Detail & Penjadwalan Acara</h3>
                        <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Judul / Nama Agenda Acara</label><input type="text" name="event_title" value="{{ old('event_title') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Tanggal Acara</label><input type="date" name="event_date" value="{{ old('event_date') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Jam Mulai</label><input type="time" name="start_time" value="{{ old('start_time') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Jam Selesai</label><input type="time" name="end_time" value="{{ old('end_time') }}" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                        </div>
                    </div>

                    <div class="space-y-4 pt-4">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 border-b border-white/10 pb-2 font-luxury-title">03. Pemilihan Paket & Tata Letak Ruang</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Pilihan Kategori Paket</label>
                                <select name="venue_package" id="venue_package" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-bold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition">
                                    <option value="" disabled selected>-- Pilih Paket Meeting --</option>
                                    <option value="Paket Small Meeting">Paket Small Meeting (Rp 5.000.000)</option>
                                    <option value="Paket Half Day Meeting">Paket Half Day Meeting (Rp 10.000.000)</option>
                                    <option value="Paket Full Day Meeting">Paket Full Day Meeting (Rp 15.000.000)</option>
                                    <option value="Paket Fullboard Meeting">Paket Fullboard Meeting (Rp 20.000.000)</option>
                                    <option value="Paket Convention Centre">Paket Convention Centre (Custom)</option>
                                </select>
                            </div>
                            <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Jumlah Tamu / Pax</label><input type="number" name="total_pax" id="total_pax" min="1" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"></div>
                        </div>
                        <div id="price_display" class="bg-amber-500/10 border border-amber-500/20 rounded-xl p-4 text-center hidden"><p class="text-amber-400 text-xs font-bold uppercase tracking-widest">Harga Paket</p><h4 id="total_price_text" class="text-2xl font-black text-white mt-1">Rp 0</h4></div>
                        <div class="space-y-1.5"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Susunan Kursi (Layout)</label><select name="room_layout" id="room_layout" required class="w-full bg-white border-2 border-slate-700 text-slate-900 font-bold rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/20 transition"><option value="Standar">Standar</option><option value="Custom Layout">Custom</option></select></div>
                        <div id="custom_notes_wrapper" class="space-y-1.5 hidden"><label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Catatan Tambahan</label><textarea name="notes" id="notes_textarea" rows="3" class="w-full bg-white border-2 border-slate-700 text-slate-900 font-semibold rounded-xl px-4 py-3 text-sm"></textarea></div>
                    </div>

                    <div class="pt-6 w-full flex justify-center border-t border-white/5">
                        <button type="button" onclick="openModal()" class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-black px-14 py-4 rounded-xl text-xs uppercase tracking-[0.2em] transition-all duration-300">
                            Kirim Formulir Reservasi
                        </button>
                    </div>
                </form>
            </div>
        </main>

        <div id="paymentModal" class="fixed inset-0 z-50 flex items-center justify-center bg-slate-950/80 backdrop-blur-sm hidden">
    <div class="bg-slate-900 border border-white/10 p-8 rounded-2xl max-w-sm w-full mx-4">
        <h3 class="text-xl font-black text-white text-center mb-6">
            Pilih Metode Pembayaran
        </h3>

        <div class="space-y-3">
            <div class="method-disabled w-full bg-slate-800 p-3 rounded-xl border border-white/5 flex justify-between items-center text-slate-400">
                QRIS <span>Soon</span>
            </div>

            <div class="method-disabled w-full bg-slate-800 p-3 rounded-xl border border-white/5 flex justify-between items-center text-slate-400">
                E-Wallet <span>Soon</span>
            </div>

            <button
                onclick="submitForm('Card Payment')"
                class="w-full bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 rounded-xl transition">
                Card Payment
            </button>
        </div>

        <button onclick="closeModal()" class="w-full mt-6 text-slate-500 text-sm">
            Batal
        </button>
    </div>
</div>

@include('components.footer')
</div>

<script>
    const packageSelect = document.getElementById('venue_package');
    const priceDisplay = document.getElementById('price_display');
    const priceText = document.getElementById('total_price_text');
    const notesWrapper = document.getElementById('custom_notes_wrapper');
    const notesTextarea = document.getElementById('notes_textarea');
    const modal = document.getElementById('paymentModal');
    const form = document.getElementById('reservationForm');

    packageSelect.addEventListener('change', () => {
        const val = packageSelect.value;

        const prices = {
            'Paket Small Meeting': 5000000,
            'Paket Half Day Meeting': 10000000,
            'Paket Full Day Meeting': 15000000,
            'Paket Fullboard Meeting': 20000000
        };

        if (prices[val]) {
            priceDisplay.classList.remove('hidden');
            priceText.innerText = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                maximumFractionDigits: 0
            }).format(prices[val]);
        } else {
            priceDisplay.classList.add('hidden');
        }

        if (val === 'Paket Convention Centre') {
            notesWrapper.classList.remove('hidden');
            notesTextarea.setAttribute('required', 'required');
        } else {
            notesWrapper.classList.add('hidden');
            notesTextarea.removeAttribute('required');
            notesTextarea.value = '';
        }
    });

    function openModal() {
        if (form.checkValidity()) {
            modal.classList.remove('hidden');
        } else {
            form.reportValidity();
        }
    }

    function closeModal() {
        modal.classList.add('hidden');
    }

    function submitForm(method) {
        document.getElementById('payment_method').value = method;
        form.submit();
    }
</script>
</body>
</html>