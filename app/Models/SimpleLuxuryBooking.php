<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimpleLuxuryBooking extends Model
{
    use HasFactory;

    /**
     * Menentukan nama tabel secara eksplisit di database
     * (Penting karena nama tabel Anda menggunakan format snake_case jamak)
     */
    protected $table = 'simple_luxury_bookings';

    /**
     * Mendaftarkan kolom mana saja yang boleh diisi melalui Form/Controller
     * (Standar keamanan bintang 5 untuk mencegah SQL Injection / manipulasi data)
     */
    protected $fillable = [
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
        'status',
        'payment_status',
        'notes',
    ];

    /**
     * Otomatis mengubah format data tanggal saat dipanggil di View/Blade
     */
    protected $casts = [
        'event_date' => 'date',
        'total_pax'  => 'integer',
        'grand_total' => 'decimal:2',
    ];
}