<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuaca</title>

    <!-- Menyertakan file CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/styleCuaca.css') }}">


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
        <h1>Info Cuaca</h1>
        <button class="button" onclick="location.href='/cek-cuaca'">Cek Cuaca</button> <!-- Tombol untuk cek cuaca -->
    </div>
</body>
</html>
