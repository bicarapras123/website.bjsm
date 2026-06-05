<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: 'Helvetica', sans-serif; font-size: 14px; color: #333; margin: 0; padding: 20px; }
        .header { text-align: center; margin-bottom: 20px; }
        .logo { width: 120px; height: auto; margin-bottom: 10px; }
        
        /* Container agar konten tidak terpotong paksa */
        .content-wrapper { display: block; page-break-inside: avoid; }
        
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th { background-color: #f8f9fa; width: 40%; text-align: left; padding: 10px; border: 1px solid #ddd; font-size: 13px; }
        td { padding: 10px; border: 1px solid #ddd; font-size: 13px; }
        
        /* Mencegah tabel terpotong di tengah baris */
        tr { page-break-inside: avoid; }
        
        .status-badge { font-weight: bold; }
        .footer { margin-top: 30px; text-align: center; font-size: 11px; color: #777; border-top: 1px solid #eee; padding-top: 10px; }
    </style>
</head>
<body>

    <div class="header">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/logobjsm.jpeg'))) }}" class="logo">
        <div style="font-size: 18px; font-weight: bold;">BJSM VENUE</div>
        <div style="font-size: 12px; color: #888;">Invoice Reservasi Resmi</div>
    </div>

    <div class="content-wrapper">
        <table>
            <tr><th>ID Booking</th><td>#{{ $booking->id }}</td></tr>
            <tr><th>Nama</th><td>{{ $booking->customer_name }}</td></tr>
            <tr><th>Email</th><td>{{ $booking->customer_email }}</td></tr>
            <tr><th>No. Telepon</th><td>{{ $booking->customer_phone }}</td></tr>
            <tr><th>Perusahaan</th><td>{{ $booking->company_or_organization ?? '-' }}</td></tr>
            <tr><th>Acara</th><td>{{ $booking->event_title }}</td></tr>
            <tr><th>Tanggal</th><td>{{ $booking->event_date }}</td></tr>
            <tr><th>Waktu</th><td>{{ $booking->start_time }} s/d {{ $booking->end_time }}</td></tr>
            <tr><th>Paket</th><td>{{ $booking->venue_package }}</td></tr>
            <tr><th>Jumlah Pax</th><td>{{ number_format($booking->total_pax) }} orang</td></tr>
            <tr><th>Layout Kursi</th><td>{{ $booking->room_layout }}</td></tr>
            <tr><th>Catatan</th><td>{{ $booking->notes ?? '-' }}</td></tr>
            <tr>
                <th>Status</th>
                <td>
                    <span class="status-badge" style="color: {{ $booking->status == 'confirmed' ? '#16a34a' : ($booking->status == 'cancelled' ? '#dc2626' : '#d97706') }}">
                        {{ strtoupper($booking->status) }}
                    </span>
                </td>
            </tr>
        </table>
    </div>

    <div class="footer">
        <p>Dokumen ini dicetak otomatis pada {{ date('d-m-Y H:i') }}</p>
        <p>&copy; {{ date('Y') }} BJSM Venue. All Rights Reserved.</p>
    </div>

</body>
</html>