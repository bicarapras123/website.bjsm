<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackagesController extends Controller
{
    /**
     * Menampilkan Halaman Galeri Foto & Spesifikasi Ruangan (Akses Publik)
     */
    public function packages()
    {
        return view('packages'); // Mengarah ke file resources/views/packages.blade.php
    }
}