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
     * Menampilkan Halaman Form Pendaftaran (Akses Publik setelah rute dipindah)
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
        // 1. Validasi Ketat Data yang Penting-Penting Saja (Standar Hotel Bintang 5)
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

        // 2. Logika Hitung Otomatis Harga Dasar & Mata Uang Sesuai Paket Pilihan (Dinamis)
        $basePrice = 0;
        $currency = 'IDR';

        switch ($request->venue_package) {
            case 'General Admissions (USD)':
                $basePrice = 290;
                $currency = 'USD';
                break;
            case 'Corporate (USD)':
                $basePrice = 220;
                $currency = 'USD';
                break;
            case 'General Admissions (IDR)':
                $basePrice = 3500000;
                $currency = 'IDR';
                break;
            case 'Instansi / Mahasiswa (IDR)':
                $basePrice = 2600000;
                $currency = 'IDR';
                break;
            default:
                $basePrice = 3000000; // Harga cadangan jika paket tidak terdefinisi
        }

        // Kalkulasi total investasi: Harga paket dikali jumlah Pax (Tamu/Tiket)
        $grandTotal = $basePrice * $request->total_pax;

        // 3. Menyimpan Data Menggunakan Query Builder ke Tabel 'simple_luxury_bookings'
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
            'status'                  => 'pending', // Otomatis masuk antrean verifikasi internal
            'notes'                   => $validated['notes'],
            'created_at'              => now(),
            'updated_at'              => now(),
        ]);

        // 4. Redirect dengan menyertakan session flash data (booking_data) agar tampil di halaman sukses
        return redirect()->route('booking.success')
            ->with('success_message', 'Reservasi eksklusif Anda berhasil didaftarkan. Tim Sales Executive kami akan segera memverifikasi ketersediaan jadwal.')
            ->with('booking_data', $request->all());
    }

    /**
     * Menampilkan Halaman Konfirmasi Sukses Setelah Booking (Akses Publik)
     */
    public function success()
    {
        return view('booking.success');
    }
}