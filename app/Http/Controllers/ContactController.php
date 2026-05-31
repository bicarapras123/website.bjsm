<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Menampilkan Halaman Galeri Foto & Spesifikasi Ruangan (Akses Publik)
     */
    public function contacts()
    {
        return view('contacts'); // Mengarah ke file resources/views/rooms.blade.php
    }
}