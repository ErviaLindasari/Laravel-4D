<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahDataController extends Controller
{

    public function index()
    {
        return view('tambah_data.tambah_data');
    }
}
