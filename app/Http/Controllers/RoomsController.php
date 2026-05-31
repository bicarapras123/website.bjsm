<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Menampilkan Halaman Galeri Foto & Spesifikasi Ruangan (Akses Publik)
     */
    public function rooms()
    {
        return view('rooms'); // Mengarah ke file resources/views/rooms.blade.php
    }
}