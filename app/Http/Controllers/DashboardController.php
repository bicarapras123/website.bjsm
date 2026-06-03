<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SimpleLuxuryBooking; // Pastikan nama model sesuai dengan file Anda
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalUsers = User::count();
        $totalBookings = SimpleLuxuryBooking::count(); 
    
        // --- TAMBAHKAN KODE HITUNG STATUS DI BAWAH INI ---
        $totalPending = SimpleLuxuryBooking::where('status', 'pending')->count();
        $totalConfirmed = SimpleLuxuryBooking::where('status', 'confirmed')->count();
        $totalCancelled = SimpleLuxuryBooking::where('status', 'cancelled')->count();
        // -------------------------------------------------
    
        $search = $request->input('search');
        $query = SimpleLuxuryBooking::latest();
    
        if (!empty($search)) {
            $query->where(function($q) use ($search) {
                $q->where('customer_name', 'LIKE', "%{$search}%")
                  ->orWhere('customer_email', 'LIKE', "%{$search}%")
                  ->orWhere('customer_phone', 'LIKE', "%{$search}%");
            });
        }
    
        $recentBookings = $query->get();
    
        // Pastikan variabel baru ini di-compact ke view
        return view('dashboard', compact(
            'totalUsers', 
            'totalBookings', 
            'totalPending', 
            'totalConfirmed', 
            'totalCancelled', 
            'recentBookings'
        ));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        $booking = SimpleLuxuryBooking::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        return redirect()->route('dashboard')->with('success', 'Status booking berhasil diperbarui!');
    }
}