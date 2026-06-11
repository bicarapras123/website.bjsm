<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Models\SimpleLuxuryBooking;

class BookingController extends Controller
{
    /**
     * Fungsi helper untuk mengambil token dari Yokke
     */
    private function getAccessToken()
    {
        $url = env('PAYMENT_BASE_URL') . '/gateway/IPGAPI/v1/token';
        $auth = base64_encode(env('PAYMENT_CLIENT_ID') . ':' . env('PAYMENT_CLIENT_SECRET'));
    
        $response = Http::withoutVerifying() // Abaikan SSL untuk testing lokal
            ->withHeaders([
                'Authorization' => 'Basic ' . $auth,
                'Content-Type'  => 'application/x-www-form-urlencoded',
            ])
            ->asForm()
            ->post($url, [
                'grant_type' => 'client_credentials',
            ]);
    
        if ($response->successful()) {
            return $response->json('access_token');
        }
    
        // CATAT SEMUA DETAIL ERROR KE LOG
        Log::error('DEBUG TOKEN - Status: ' . $response->status());
        Log::error('DEBUG TOKEN - Body: ' . $response->body());
        Log::error('DEBUG TOKEN - URL: ' . $url);
        
        return null;
    }

    
    public function index()
    {
        return view('booking.index');
    }

    public function create()
    {
        return view('booking.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name'           => 'required|string|max:50',
            'customer_email'          => 'required|email|max:99',
            'customer_phone'          => 'required|string|max:15',
            'company_or_organization' => 'nullable|string|max:255',
            'event_title'             => 'required|string|max:255',
            'event_date'              => 'required|date',
            'start_time'              => 'required',
            'end_time'                => 'required',
            'venue_package'           => 'required|string',
            'total_pax'               => 'required|integer',
            'room_layout'             => 'required|string',
            'payment_method'          => 'required|string',
            'notes'                   => 'nullable|string',
        ]);

        $basePrice = match ($request->venue_package) {
            'Paket Small Meeting'      => 5000000,
            'Paket Half Day Meeting'   => 10000000,
            'Paket Full Day Meeting'   => 15000000,
            'Paket Fullboard Meeting'  => 20000000,
            default                    => 0,
        };

        $bookingId = DB::table('simple_luxury_bookings')->insertGetId([
            'customer_name'           => $validated['customer_name'],
            'customer_email'          => $validated['customer_email'],
            'customer_phone'          => $validated['customer_phone'],
            'company_or_organization' => $validated['company_or_organization'],
            'event_title'             => $validated['event_title'],
            'event_date'              => $validated['event_date'],
            'start_time'              => $validated['start_time'],
            'end_time'                => $validated['end_time'],
            'venue_package'           => $validated['venue_package'],
            'total_pax'               => $validated['total_pax'],
            'room_layout'             => $validated['room_layout'],
            'payment_method'          => $validated['payment_method'],
            'notes'                   => $validated['notes'],
            'grand_total'             => $basePrice,
            'currency'                => 'IDR',
            'status'                  => 'pending',
            'payment_status'          => 'unpaid',
            'created_at'              => now(),
            'updated_at'              => now(),
        ]);

        // AMBIL TOKEN DULU
        $token = $this->getAccessToken();
        if (!$token) {
            Log::error('Gagal mengambil Access Token dari Yokke');
            return back()->withErrors(['error' => 'Sistem pembayaran sedang gangguan.']);
        }

        // PANGGIL INQUIRY DENGAN TOKEN
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'X-Api-Key'     => env('PAYMENT_API_KEY'),
            'Content-Type'  => 'application/json',
        ])->post(env('PAYMENT_BASE_URL') . '/gateway/IPGAPI/v1/inquiries', [
            "amount"       => (float)$basePrice,
            "currency"     => "IDR",
            "referenceUrl" => url('/booking/success'),
            "customer"     => [
                "name"        => $validated['customer_name'],
                "email"       => $validated['customer_email'],
                "phoneNumber" => $validated['customer_phone'],
                "country"     => "ID",
                "locality"    => "Jakarta",
                "language"    => "en"
            ],
            "order" => [
                "id"           => (string)$bookingId,
                "disablePromo" => "true"
            ]
        ]);

        if ($response->successful()) {
            return redirect()->away($response->json('urls.checkout'));
        }

        Log::error('Yokke Inquiry Error: ' . $response->body());
        return back()->withErrors(['error' => 'Gagal terhubung ke gateway pembayaran.']);
    }

    public function success()
    {
        return view('booking.success');
    }

    public function handleWebhook(Request $request)
    {
        $signature = $request->header('X-Signature');
        if (!$this->isValidSignature($request, $signature)) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $booking = SimpleLuxuryBooking::find($request->input('order_id'));
        if ($booking) {
            $booking->update(['payment_status' => $request->input('status')]);
            return response()->json(['status' => 'success'], 200);
        }
        return response()->json(['message' => 'Booking not found'], 404);
    }

    private function isValidSignature(Request $request, $signature)
    {
        return hash_equals(hash_hmac('sha256', $request->getContent(), env('PAYMENT_SECRET_KEY')), (string) $signature);
    }
}