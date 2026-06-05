<?php

namespace App\Http\Controllers;

use App\Models\SimpleLuxuryBooking;
use App\Models\VenueBooking;
use App\Mail\VenueBookingNotification; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class VenueBookingController extends Controller
{
    // Fungsi untuk menampilkan form
    public function create()
    {
        $venueBookings = VenueBooking::latest()->get();
        return view('venue-booking.create', compact('venueBookings'));
    }

    // Fungsi untuk pencarian pelanggan lama
    public function searchCustomer(Request $request)
    {
        $search = $request->get('query');
        
        $customers = SimpleLuxuryBooking::where('customer_name', 'LIKE', "%{$search}%")
            ->orWhere('customer_email', 'LIKE', "%{$search}%")
            ->orWhere('customer_phone', 'LIKE', "%{$search}%")
            ->select('customer_name', 'customer_email', 'customer_phone')
            ->get()
            ->unique('customer_email')
            ->take(5)
            ->values();

        return response()->json($customers);
    }

    // Fungsi untuk menyimpan data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name'  => 'required',
            'customer_email' => 'required|email',
            'customer_phone' => 'required',
            'venue_name'     => 'required',
            'event_date'     => 'required|date',
            'start_time'     => 'required',
            'end_time'       => 'required',
            'notes'          => 'nullable',
        ]);
    
        // 1. Simpan ke database
        $booking = VenueBooking::create($validated);
    
        // 2. Kirim Pesan WA Otomatis ke Pelanggan
        $phone = preg_replace('/^0/', '62', $validated['customer_phone']);
        $message = "Halo *{$validated['customer_name']}*, Reservasi Anda untuk *{$validated['venue_name']}* telah dikonfirmasi oleh Admin BJSM. Terima kasih!";
    
        try {
        // Ganti bagian Http ini menjadi:
        Http::withHeaders([
            'Authorization' => 'LBwEmQYeTxjxerBoNigZ' // Langsung masukkan tokennya di sini
        ])->asForm()->post('https://api.fonnte.com/send', [
            'target' => $phone,
            'message' => $message,
        ]);
        } catch (\Exception $e) {
            // Gagal kirim WA tetap lanjut
        }
    
        return redirect()->back()->with('success', 'Booking berhasil disimpan & WA konfirmasi terkirim!');
    }
}