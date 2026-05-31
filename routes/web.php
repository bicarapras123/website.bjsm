<?php

use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Halaman Baru: Galeri Ruangan (Mandiri sejajar dengan Welcome)
Route::get('/rooms', [RoomsController::class, 'rooms'])->name('rooms.index');

// Halaman Baru: Katalog Paket Sewa Eksklusif
Route::get('/packages', [PackagesController::class, 'packages'])->name('packages.index');

// Halamab Baru: Contact
Route::get('/contacts', [ContactController::class, 'contacts'])->name('contacts.index');

// =========================================================================
// RUTE AKSES PUBLIK (BISA DIAKSES SIAPA SAJA TANPA PERLU LOGIN)
// =========================================================================

// Halaman 1: Katalog Tarif & Rincian Investasi
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');

// Halaman 2: Form Pendaftaran Booking (Sudah aman di luar grup auth)
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');

// Proses Submit Booking Data ke Database
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

// Halaman 3: Konfirmasi Sukses setelah submit form
Route::get('/booking/success', [BookingController::class, 'success'])->name('booking.success');


// =========================================================================
// RUTE PRIVATE (WAJIB LOGIN)
// =========================================================================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';