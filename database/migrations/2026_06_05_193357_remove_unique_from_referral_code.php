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
        Schema::table('users', function (Blueprint $table) {
            // Kita hapus index unique pada kolom referral_code
            // Pastikan nama index-nya benar. Biasanya Laravel menamai index: users_referral_code_unique
            $table->dropUnique('users_referral_code_unique'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Jika ingin mengembalikan ke unique (opsional)
            $table->unique('referral_code');
        });
    }
};