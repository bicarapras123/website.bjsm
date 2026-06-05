<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SimpleLuxuryBooking; // Pastikan nama model sesuai dengan file Anda
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Tambahkan ini untuk fungsi grafik
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalUsers = User::count();
        $totalBookings = SimpleLuxuryBooking::count(); 
    
        // --- HITUNG STATUS ---
        $totalPending = SimpleLuxuryBooking::where('status', 'pending')->count();
        $totalConfirmed = SimpleLuxuryBooking::where('status', 'confirmed')->count();
        $totalCancelled = SimpleLuxuryBooking::where('status', 'cancelled')->count();
    
        $search = $request->input('search');
        $query = SimpleLuxuryBooking::latest();
    
        if (!empty($search)) {
            $query->where(function($q) use ($search) {
                $q->where('customer_name', 'LIKE', "%{$search}%")
                  ->orWhere('customer_email', 'LIKE', "%{$search}%")
                  ->orWhere('customer_phone', 'LIKE', "%{$search}%");
            });
        }
    
        // Hapus ->take(5)->get() dan ganti dengan ->paginate(5)
        $recentBookings = $query->paginate(5);
    
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

    // --- TAMBAHAN UNTUK FITUR ANALITIK ---
    public function analytics()
    {
        // 1. Data untuk Grafik Bar: Jumlah Booking per Bulan
        $monthlyBookings = SimpleLuxuryBooking::selectRaw('COUNT(*) as total, MONTH(event_date) as month')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $labels = $monthlyBookings->pluck('month')->map(function($m) {
            return date("M", mktime(0, 0, 0, $m, 1));
        });
        $data = $monthlyBookings->pluck('total');

        // 2. Data untuk Grafik Pie: Status Booking
        $statusCounts = SimpleLuxuryBooking::select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->pluck('total', 'status');

        return view('analytics', compact('labels', 'data', 'statusCounts'));
    }

    public function downloadPdf($id)
    {
        // Sesuaikan 'SimpleLuxuryBooking' dengan nama Model Anda
        $booking = \App\Models\SimpleLuxuryBooking::findOrFail($id); 
        
        $pdf = Pdf::loadView('pdf.booking', compact('booking'));
        
        return $pdf->download('Booking_'.$booking->id.'.pdf');
    }
}