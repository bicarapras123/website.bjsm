<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('venue_bookings', function (Blueprint $table) {
            $table->id();
            // Menyimpan info kustomer yang dipilih dari data lama
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            
            // Info booking venue yang ringkas
            $table->string('venue_name');
            $table->date('event_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('venue_bookings');
    }
};