<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VenueBooking extends Model
{
    // Daftarkan nama tabelnya secara eksplisit agar aman
    protected $table = 'venue_bookings';

    // Daftarkan semua kolom yang diizinkan untuk diinput massal melalui form
    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'venue_name',
        'event_date',
        'start_time',
        'end_time',
        'notes',
    ];
}