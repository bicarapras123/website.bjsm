<?php

use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VenueBookingController;
use Illuminate\Support\Facades\Route;

// =========================================================================
// RUTE PUBLIK
// =========================================================================
Route::get('/', function () { return view('welcome'); });
Route::get('/rooms', [RoomsController::class, 'rooms'])->name('rooms.index');
Route::get('/packages', [PackagesController::class, 'packages'])->name('packages.index');
Route::get('/contacts', [ContactController::class, 'contacts'])->name('contacts.index');

// Rute Booking Publik
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/success', [BookingController::class, 'success'])->name('booking.success');

// =========================================================================
// RUTE PRIVATE (ADMIN)
// =========================================================================
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Dashboard Utama
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // RUTE BARU: Analitik Grafik
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('analytics');
    
    // Status Management
    Route::patch('/dashboard/booking/{id}/status', [DashboardController::class, 'updateStatus'])->name('dashboard.updateStatus');

    // RUTE BARU: Download PDF
    Route::get('/dashboard/download/{id}', [DashboardController::class, 'downloadPdf'])->name('dashboard.downloadPdf');

    // Tambahkan di dalam middleware(['auth', 'verified'])
    Route::delete('/dashboard/booking/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
    
    // Fitur Venue Booking Admin
    Route::get('/venue-booking/create', [VenueBookingController::class, 'create'])->name('venue.create');
    Route::post('/venue-booking/store', [VenueBookingController::class, 'store'])->name('venue.store');
    Route::get('/venue-booking/search-customer', [VenueBookingController::class, 'searchCustomer'])->name('venue.searchCustomer');
});

// =========================================================================
// RUTE MANAGEMENT PROFILE
// =========================================================================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// =========================================================================
// RUTE WEBHOOK PEMBAYARAN
// =========================================================================
Route::post('/webhook/payment', [BookingController::class, 'handleWebhook'])
    ->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);

require __DIR__.'/auth.php';