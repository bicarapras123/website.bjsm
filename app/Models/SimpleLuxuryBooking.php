<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimpleLuxuryBooking extends Model
{
    use HasFactory;

    protected $table = 'simple_luxury_bookings';

    protected $fillable = [
        'booking_code',      // TAMBAHKAN INI
        'customer_name',
        'customer_email',
        'customer_phone',
        'company_or_organization',
        'event_title',
        'event_date',
        'start_time',
        'end_time',
        'venue_package',
        'total_pax',
        'room_layout',
        'grand_total',
        'currency',
        'status',           // TAMBAHKAN INI
        'payment_status',    // TAMBAHKAN INI
        'notes',
    ];

    protected $casts = [
        'event_date' => 'date',
        'total_pax'  => 'integer',
        'grand_total' => 'decimal:2',
    ];

    // OTOMATISASI DATA BARU
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($booking) {
            // Generate kode booking jika belum ada
            if (empty($booking->booking_code)) {
                $booking->booking_code = 'BJSM-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3)));
            }
            // Set status awal
            if (empty($booking->status)) {
                $booking->status = 'pending';
            }
            // Set status bayar awal
            if (empty($booking->payment_status)) {
                $booking->payment_status = 'unpaid';
            }
        });
    }
}