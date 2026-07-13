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
            $url = config('services.yokke.base_url') . '/gateway/IPGAPI/v1/token';
            $auth = base64_encode(config('services.yokke.client_id') . ':' . config('services.yokke.client_secret'));
        
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
                'venue_package'           => 'required|in:Paket Small Meeting,Paket Half Day Meeting,Paket Full Day Meeting,Paket Fullboard Meeting,Paket Executive Meeting,Paket Premium Meeting,Paket Corporate Meeting,Paket Grand Ballroom,Paket Convention Centre,Paket Luxury Convention,Paket Custom',
                'custom_price'            => 'nullable|numeric',
                'total_pax'               => 'required|integer',
                'room_layout'             => 'required|string',
                'payment_method'          => 'required|string',
                'notes'                   => 'nullable|string',
            ]);
        
            // Harga paket
            // Ambil & bersihkan custom price
            $customPrice = (int) preg_replace('/[^0-9]/', '', $request->custom_price);

            // Harga paket
            $basePrice = match ($request->venue_package) {
                'Paket Small Meeting'     => 5000000,
                'Paket Half Day Meeting'  => 10000000,
                'Paket Full Day Meeting'  => 15000000,
                'Paket Fullboard Meeting' => 20000000,
                'Paket Executive Meeting' => 25000000,
                'Paket Premium Meeting'   => 30000000,
                'Paket Corporate Meeting' => 35000000,
                'Paket Grand Ballroom'    => 40000000,
                'Paket Convention Centre' => 45000000,
                'Paket Luxury Convention' => 50000000,
                'Paket Custom'            => $customPrice,
                default                   => 0,
            };
        
            // Validasi paket custom
            if ($request->venue_package === 'Paket Custom') {

                if (!$request->filled('custom_price')) {
                    return back()->withErrors([
                        'custom_price' => 'Masukkan nominal paket custom.'
                    ])->withInput();
                }
            
                if ($customPrice <= 50000000) {
                    return back()->withErrors([
                        'custom_price' => 'Harga paket custom harus lebih dari Rp 50.000.000.'
                    ])->withInput();
                }
            }
        
            Log::info('Debug Payment: Package=' . $request->venue_package . ' Price=' . $basePrice);
        
            if ($basePrice <= 0) {
                return back()->withErrors([
                    'error' => 'Paket tidak valid atau harga tidak ditemukan.'
                ]);
            }
        
// Generate booking code (lebih unik)
$bookingCode = 'BJSM-' . strtoupper(uniqid());

// =============================
// Amount untuk testing Yokke
// =============================
// $amount = app()->environment('production')
  //  ? (int) $basePrice
    // : 10000;

// Gunakan harga asli (Production)
$amount = (int) $basePrice;

// Simpan booking ke database
$bookingId = DB::table('simple_luxury_bookings')->insertGetId([
    'booking_code'            => $bookingCode,
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
    'grand_total'             => $amount,
    'currency'                => 'IDR',
    'status'                  => 'pending',
    'payment_status'          => 'unpaid',
    'created_at'              => now(),
    'updated_at'              => now(),
]);

// =============================
// Ambil Access Token Yokke
// =============================
$token = $this->getAccessToken();

if (!$token) {
    Log::error('Yokke : Gagal mengambil access token');

    return back()->withErrors([
        'error' => 'Sistem pembayaran sedang tidak tersedia.'
    ]);
}


// Payload sesuai dokumentasi Yokke
$payload = [
    "amount" => $amount,
    "currency" => "IDR",

    "referenceUrl" => url('/'),

    "customer" => [
        "name"        => $validated['customer_name'],
        "email"       => $validated['customer_email'],
        "phoneNumber" => $validated['customer_phone'],
        "country"     => "IDN",
        "locality"    => "Jakarta",
        "language"    => "id"
    ],

    "order" => [
        "id" => $bookingCode,

        "disablePromo" => true,

        "items" => [
            [
                "name" => $validated['venue_package'],
                "quantity" => 1,
                "amount" => $amount
            ]
        ]
    ]
];

// =============================
// LOG REQUEST
// =============================
Log::info('========== YOKKE REQUEST ==========');
Log::info(json_encode($payload, JSON_PRETTY_PRINT));

// =============================
// Kirim Inquiry
// =============================
$response = Http::withoutVerifying()
    ->timeout(60)
    ->withHeaders([
        'Authorization' => 'Bearer ' . $token,
        'X-Api-Key'     => config('services.yokke.api_key'),
        'Accept'        => 'application/json',
        'Content-Type'  => 'application/json',
    ])
    ->post(
        config('services.yokke.base_url') . '/gateway/IPGAPI/v1/inquiries',
        $payload
    );

// =============================
// LOG RESPONSE
// =============================
Log::info('========== YOKKE RESPONSE ==========');
Log::info('HTTP : ' . $response->status());
Log::info($response->body());

// =============================
// Berhasil
// =============================
if ($response->successful()) {

    $checkoutUrl =
        $response->json('checkoutUrl')
        ?? $response->json('urls.checkout')
        ?? $response->json('checkout_url');

    if ($checkoutUrl) {
        return redirect()->away($checkoutUrl);
    }

    Log::error('Checkout URL tidak ditemukan.');
    Log::error($response->body());

    return back()->withErrors([
        'error' => 'Checkout URL tidak ditemukan.'
    ]);
}


// =============================
// Jika gagal
// =============================
Log::error('========== YOKKE ERROR ==========');
Log::error('HTTP : ' . $response->status());
Log::error($response->body());

if ($response->status() == 409) {

    return back()->withErrors([
        'error' => 'Order dengan kode ini sudah pernah dibuat di Yokke. Silakan ulangi transaksi.'
    ]);
}

return back()->withErrors([
    'error' => 'Gateway pembayaran gagal diproses.'
]);

} // <-- PENUTUP METHOD store()

public function success()
{
    return view('booking.success');
}

public function handleWebhook(Request $request)
{
    Log::info('========== WEBHOOK MASUK ==========');
    Log::info('Headers:', $request->headers->all());
    Log::info('Payload:', $request->all());
    Log::info('Raw Body: ' . $request->getContent());

    $signature = $request->header('signature');
    
    DB::table('webhook_logs')->insert([

        'booking_code' => data_get($request->all(), 'inquiry.order.id'),
    
        'transaction_status' => data_get($request->all(), 'transaction.status'),
    
        'headers' => json_encode($request->headers->all(), JSON_PRETTY_PRINT),
    
        'payload' => json_encode($request->all(), JSON_PRETTY_PRINT),
    
        'raw_body' => $request->getContent(),
    
        'signature' => $signature,
    
        'created_at' => now(),
    
        'updated_at' => now(),
    
    ]);

    Log::info('Signature Header:', [
        'signature' => $signature,
    ]);
    

    if (!$this->isValidSignature($request, $signature)) {
        Log::warning('Signature tidak valid');

        return response()->json([
            'message' => 'Unauthorized'
        ], 403);
    }

    $orderId = data_get($request->all(), 'inquiry.order.id');
    $status  = data_get($request->all(), 'transaction.status');
    
    Log::info('Order ID : ' . $orderId);
    Log::info('Payment Status : ' . $status);
    

    $booking = SimpleLuxuryBooking::where('booking_code', $orderId)->first();

if (!$booking) {

    Log::warning('========== BOOKING TIDAK DITEMUKAN ==========');
    Log::warning([
        'booking_code' => $orderId,
    ]);

    return response()->json([
        'message' => 'Booking not found'
    ], 404);
}

Log::info('========== BOOKING DITEMUKAN ==========');
Log::info([
    'id' => $booking->id,
    'booking_code' => $booking->booking_code,
    'payment_status' => $booking->payment_status,
    'status' => $booking->status,
]);

switch ($status) {

    case 'validated':
        $booking->payment_status = 'validated';
        break;

    case 'captured':
        $booking->payment_status = 'paid';
        $booking->status = 'confirmed';
        break;

    case 'failed':
        $booking->payment_status = 'failed';
        $booking->status = 'cancelled';
        break;

    case 'declined':
        $booking->payment_status = 'declined';
        $booking->status = 'cancelled';
        break;

    default:
        $booking->payment_status = $status;
        break;
}

Log::info('========== SEBELUM SAVE ==========');
Log::info([
    'payment_status' => $booking->payment_status,
    'status' => $booking->status,
]);

$booking->save();

Log::info('========== SESUDAH SAVE ==========');

$booking->refresh();

Log::info([
    'payment_status' => $booking->payment_status,
    'status' => $booking->status,
]);

// Ambil hash dan timestamp dari header
[$receivedSignature, $timestamp] = explode(';', $signature);

// Generate validateSignature sesuai dokumentasi Yokke
$validateSignature = md5(
    config('services.yokke.secret_key') .
    $receivedSignature .
    $timestamp
);

return response()->json([
    "status" => "ok",
    "validateSignature" => $validateSignature
], 200);

}

private function isValidSignature(Request $request, $signatureHeader)
{
    if (empty($signatureHeader)) {
        return false;
    }

    $parts = explode(';', $signatureHeader);

    if (count($parts) !== 2) {
        Log::warning('Format Signature Yokke tidak valid');
        return false;
    }

    [$signature, $timestamp] = $parts;

    $payload = $request->getContent() . '.' . $timestamp;

    $generated = hash_hmac(
        'sha256',
        $payload,
        config('services.yokke.secret_key')
    );

    Log::info('========== SIGNATURE DEBUG ==========');
    Log::info([
        'received'  => $signature,
        'timestamp' => $timestamp,
        'generated' => $generated,
    ]);

    return hash_equals($generated, $signature);
}

}