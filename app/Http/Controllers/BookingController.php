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
    'grand_total'             => $basePrice,
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

$amount = (int) $basePrice;

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

    $signature = $request->header('X-Signature');

    if (!$this->isValidSignature($request, $signature)) {
        Log::warning('Signature tidak valid');

        return response()->json([
            'message' => 'Unauthorized'
        ], 403);
    }

    $booking = SimpleLuxuryBooking::find($request->input('order_id'));

    if ($booking) {

        $booking->update([
            'payment_status' => $request->input('status')
        ]);

        return response()->json([
            'status' => 'success'
        ], 200);
    }

    return response()->json([
        'message' => 'Booking not found'
    ], 404);
}

private function isValidSignature(Request $request, $signature)
{
    return hash_equals(
        hash_hmac(
            'sha256',
            $request->getContent(),
            config('services.yokke.secret_key')
        ),
        (string) $signature
    );
}
}