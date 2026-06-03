<?php

namespace App\Http\Controllers;

use App\Models\SimpleLuxuryBooking;
use App\Models\VenueBooking;
use App\Mail\VenueBookingNotification; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VenueBookingController extends Controller
{
    // 1. Menampilkan halaman input form dengan list data dari database
    public function create()
    {
        // ✨ Mengambil seluruh data booking venue terbaru untuk tabel di sebelah kanan form
        $venueBookings = VenueBooking::latest()->get();

        // Melempar variabel $venueBookings ke file blade
        return view('venue-booking.create', compact('venueBookings'));
    }

    // 2. API Pencarian Otomatis untuk mencarikan data dari simple_luxury_bookings
    public function searchCustomer(Request $request)
    {
        $search = $request->get('query');
        
        // Cari kustomer berdasarkan nama/email/phone di tabel lama
        $customers = SimpleLuxuryBooking::where('customer_name', 'LIKE', "%{$search}%")
            ->orWhere('customer_name', 'LIKE', "%{$search}%")
            ->orWhere('customer_email', 'LIKE', "%{$search}%")
            ->orWhere('customer_phone', 'LIKE', "%{$search}%")
            ->select('customer_name', 'customer_email', 'customer_phone')
            ->get()
            ->unique('customer_email') // ✨ AMAN: Menghilangkan baris kuning MySQL strict mode
            ->take(5)
            ->values(); // Reset indeks array agar JSON rapi

        return response()->json($customers);
    }

    // 3. Menyimpan data baru ke tabel venue_bookings & Kirim ke Gmail
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name'  => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'venue_name'     => 'required|string|max:255',
            'event_date'     => 'required|date',
            'start_time'     => 'required',
            'end_time'       => 'required',
            'notes'          => 'nullable|string',
        ]);

        // Simpan ke database tabel baru (venue_bookings)
        $booking = VenueBooking::create($validated);

        // Mengirim Notifikasi ke Gmail Admin
        try {
            Mail::to('tiop0747@gmail.com')->send(new VenueBookingNotification($booking));
        } catch (\Throwable $e) {
            // ✨ PENGAMAN FATAL: Menggunakan \Throwable menjamin kode di bawah tetap jalan
            // Walaupun file mail belum dibuat, salah ketik, atau internet server mati.
        }

        return redirect()->back()->with('success', 'Pemesanan venue berhasil disimpan dan notifikasi Gmail terkirim!');
    }
}