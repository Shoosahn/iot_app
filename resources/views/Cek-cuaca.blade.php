<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Cuaca</title>

    <!-- Menyertakan file CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/stylecek-Cuaca.css') }}">
    <style>
        /* Mengatur elemen body dengan gambar latar belakang */
        body {
            margin: 0;
            padding: 0;
            height: 100vh; /* Full screen height */
            background-image: url('{{ asset("images/bg.jpg") }}'); /* Pastikan gambar ini ada di folder public/images/ */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Cek Cuaca</h1>

        @if(isset($data))
            <div class="data-section">
                <p><strong>Suhu Maksimum:</strong> {{ $data['suhu_max'] }}°C</p>
                <p><strong>Suhu Minimum:</strong> {{ $data['suhu_min'] }}°C</p>
                <p><strong>Rata-rata Suhu:</strong> {{ $data['suhu_avg'] }}°C</p>
            </div>

            <!-- Menampilkan data suhu dan kelembapan maksimum -->
            @if(isset($data['nilai_suhu_max_humid_max']))
                <div class="data-section">
                    <p class="data-title">Data Suhu dan Kelembapan Maksimum</p>
                    @foreach ($data['nilai_suhu_max_humid_max'] as $item)
                        <p><strong>ID:</strong> {{ $item['id'] }}</p>
                        <p><strong>Suhu:</strong> {{ $item['suhu'] }}°C</p>
                        <p><strong>Kelembapan:</strong> {{ $item['humid'] }}%</p>
                        <p><strong>Kecerahan:</strong> {{ $item['lux'] }}</p>
                        <p><strong>Waktu:</strong> {{ $item['timestamp'] }}</p>
                        <hr> <!-- Pemisah antar item data -->
                    @endforeach
                </div>
            @endif

            <!-- Menampilkan dua data month_year tertinggi -->
            @if(isset($data['month_year_max']))
                <div class="data-section">
                    <p class="data-title">Bulan dan Tahun Maksimum</p>
                    @foreach ($data['month_year_max'] as $month)
                        <p>{{ $month['month_year'] }}</p>
                    @endforeach
                </div>
            @endif

        @else
            <p>Data cuaca tidak tersedia.</p>
        @endif
    </div>
</body>
</html>
