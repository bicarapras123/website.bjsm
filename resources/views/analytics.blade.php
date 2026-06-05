<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Analitik & Grafik Performa') }}
            </h2>
            <p class="text-sm text-slate-400 mt-1">Ringkasan visual untuk memantau tren pemesanan dan status reservasi.</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-lg text-slate-800">Tren Booking Bulanan</h3>
                    <p class="text-xs text-slate-400 mb-6">Visualisasi volume pemesanan venue dalam kurun waktu satu tahun terakhir.</p>
                    <canvas id="monthlyChart"></canvas>
                    <div class="mt-6 p-4 bg-indigo-50 rounded-xl text-xs text-indigo-700">
                        <strong>Analisis:</strong> Grafik ini menunjukkan fluktuasi permintaan venue. Puncak pada bulan tertentu membantu Anda merencanakan staf operasional dan stok kebutuhan acara.
                    </div>
                </div>

                <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-100 shadow-sm">
                    <h3 class="font-bold text-lg text-slate-800">Distribusi Status Booking</h3>
                    <p class="text-xs text-slate-400 mb-6">Perbandingan proporsi antara reservasi Pending, Confirmed, dan Cancelled.</p>
                    <canvas id="statusChart"></canvas>
                    <div class="mt-6 p-4 bg-emerald-50 rounded-xl text-xs text-emerald-700">
                        <strong>Analisis:</strong> Diagram ini mencerminkan tingkat efektivitas konversi. Dominasi warna hijau (Confirmed) menunjukkan performa bisnis yang sehat dan tingkat kepercayaan pelanggan yang tinggi.
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Konfigurasi Chart.js agar lebih responsif
        const chartOptions = { responsive: true, maintainAspectRatio: true };

        const monthlyCtx = document.getElementById('monthlyChart').getContext('2d');
        new Chart(monthlyCtx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [{
                    label: 'Total Pesanan',
                    data: {!! json_encode($data) !!},
                    backgroundColor: '#4f46e5',
                    borderRadius: 8
                }]
            },
            options: chartOptions
        });

        const statusCtx = document.getElementById('statusChart').getContext('2d');
        new Chart(statusCtx, {
            type: 'doughnut',
            data: {
                labels: ['Pending', 'Confirmed', 'Cancelled'],
                datasets: [{
                    data: [
                        {{ $statusCounts['pending'] ?? 0 }}, 
                        {{ $statusCounts['confirmed'] ?? 0 }}, 
                        {{ $statusCounts['cancelled'] ?? 0 }}
                    ],
                    backgroundColor: ['#f59e0b', '#10b981', '#f43f5e']
                }]
            },
            options: chartOptions
        });
    </script>
</x-app-layout>