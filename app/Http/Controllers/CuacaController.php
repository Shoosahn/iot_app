<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client; // Untuk melakukan request HTTP ke API
use Illuminate\Support\Facades\Log; // Import Log

class CuacaController extends Controller
{
    public function index()
    {
        return view('cuaca'); // Halaman utama
    }

    public function cekCuaca()
    {
        // Menggunakan GuzzleHttp untuk mengambil data cuaca dari API
        $client = new Client();
        $response = $client->get('http://127.0.0.1:5000/cuaca'); // URL API

        // Mendapatkan hasil respons dari API
        $data = json_decode($response->getBody()->getContents(), true);

        // Debugging: Tampilkan data di log Laravel
        Log::info('Data dari API:', $data);

        // Mengirim data cuaca ke view
        return view('cek-cuaca', ['data' => $data]);
    }
}
