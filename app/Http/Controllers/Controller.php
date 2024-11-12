<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController

{
    public function index()
    {
        // Logika untuk mendapatkan data cuaca atau tampilan halaman
        return view('cuaca');
    }
}

