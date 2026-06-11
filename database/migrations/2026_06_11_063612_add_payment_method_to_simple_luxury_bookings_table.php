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
            // Menambah kolom payment_method setelah kolom venue_package
            $table->string('payment_method')->nullable()->after('venue_package');
        });
    }
    
    public function down()
    {
        Schema::table('simple_luxury_bookings', function (Blueprint $table) {
            $table->dropColumn('payment_method');
        });
    }
};
