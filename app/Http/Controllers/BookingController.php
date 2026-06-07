<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Menampilkan Halaman Katalog Tarif & Benefit (Akses Publik)
     */
    public function index()
    {
        return view('booking.index');
    }

    /**
     * Menampilkan Halaman Form Pendaftaran (Akses Publik)
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Memproses Data Form Masuk & Menyimpannya ke Database
     */
    public function store(Request $request)
    {
        // 1. Validasi Data
        $validated = $request->validate([
            'customer_name'           => 'required|string|max:255',
            'customer_email'          => 'required|email|max:255',
            'customer_phone'          => 'required|string|max:20',
            'company_or_organization' => 'nullable|string|max:255',
            'event_title'             => 'required|string|max:255',
            'event_date'              => 'required|date|after_or_equal:today',
            'start_time'              => 'required',
            'end_time'                => 'required',
            'venue_package'           => 'required|string',
            'total_pax'               => 'required|integer|min:1',
            'room_layout'             => 'required|string',
            'notes'                   => 'nullable|string',
        ]);

            // Logika Harga (Fixed Price berdasarkan Paket)
            $basePrice = 0;
            $currency = 'IDR';

            switch ($request->venue_package) {
                case 'Paket Small Meeting':
                    $basePrice = 5000000;
                    break;
                case 'Paket Half Day Meeting':
                    $basePrice = 10000000;
                    break;
                case 'Paket Full Day Meeting':
                    $basePrice = 15000000;
                    break;
                case 'Paket Fullboard Meeting':
                    $basePrice = 20000000;
                    break;
                default:
                    $basePrice = 0; // Untuk Custom, harga 0 atau sesuai kebijakan Anda
            }

            $grandTotal = $basePrice;

        // 3. Menyimpan Data ke Database
        DB::table('simple_luxury_bookings')->insert([
            'customer_name'           => $validated['customer_name'],
            'customer_email'          => $validated['customer_email'],
            'customer_phone'          => $validated['customer_phone'],
            'company_or_organization' => $validated['company_or_organization'],
            'event_title'             => $validated['event_title'],
            'event_date'              => $validated['event_date'],
            'start_time'              => $validated['start_time'],
            'end_time'                => $validated['end_time'],
            'venue_package'           => $validated['venue_package'],
            'total_pax'               => $validated['total_pax'],
            'room_layout'             => $validated['room_layout'],
            'grand_total'             => $grandTotal,
            'currency'                => $currency,
            'status'                  => 'pending',
            'notes'                   => $validated['notes'],
            'created_at'              => now(),
            'updated_at'              => now(),
        ]);

        // 4. Redirect
        return redirect()->route('booking.success')
            ->with('success_message', 'Reservasi eksklusif Anda berhasil didaftarkan. Tim Sales Executive kami akan segera memverifikasi ketersediaan jadwal.')
            ->with('booking_data', $request->all());
    }

    /**
     * Menampilkan Halaman Konfirmasi Sukses
     */
    public function success()
    {
        return view('booking.success');
    }
}