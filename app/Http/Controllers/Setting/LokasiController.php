<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LokasiController extends Controller
{
    public function index()
    {
        return view('setting.lokasi.index');
    }

    public function add()
    {
        return view('setting.lokasi.add');
    }

    public function edit()
    {
        return view('setting.lokasi.edit');
    }
}
