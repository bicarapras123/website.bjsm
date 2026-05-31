<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('simple_luxury_bookings', function (Blueprint $table) {
            $table->id();

            // 1. IDENTITAS UTAMA (Siapa yang pesan?)
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->string('company_or_organization')->nullable(); // Opsional untuk instansi

            // 2. WAKTU & JUDUL (Kapan acaranya agar tidak bentrok?)
            $table->string('event_title');
            $table->date('event_date'); // Tanggal pelaksanaan
            $table->time('start_time'); // Jam mulai
            $table->time('end_time');   // Jam selesai

            // 3. LOGISTIK (Paket apa dan berapa orang?)
            $table->string('venue_package'); // Dropdown: Royal Grand Ballroom, Sky Panorama, dll.
            $table->integer('total_pax');    // Jumlah tamu undangan
            $table->string('room_layout');   // Susunan kursi: Theater, Banquet/Round Table, Classroom

            // 4. BILLING & STATUS VALIDASI
            $table->decimal('grand_total', 15, 2)->default(0); // Total harga yang harus dibayar
            $table->string('currency', 3)->default('IDR');     // IDR atau USD
            
            // Status wajib hotel: pending (baru isi), confirmed (aman/DP masuk), cancelled (batal)
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->text('notes')->nullable(); // Catatan tambahan dari pemesan

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simple_luxury_bookings');
    }
};