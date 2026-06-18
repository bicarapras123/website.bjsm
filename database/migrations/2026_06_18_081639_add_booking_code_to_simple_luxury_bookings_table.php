<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('simple_luxury_bookings', function (Blueprint $table) {
            // Kita buat nullable agar migrasi sukses untuk data lama
            // Kita hapus unique() untuk sementara sampai data diisi
            $table->string('booking_code', 20)->nullable()->after('id');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('simple_luxury_bookings', function (Blueprint $table) {
            $table->dropColumn('booking_code');
        });
    }
};