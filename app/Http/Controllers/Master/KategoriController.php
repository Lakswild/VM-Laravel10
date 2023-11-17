<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index()
    {
        return view('master.kategori.index');
    }

    public function add()
    {
        return view('master.kategori.add');
    }

    public function edit()
    {
        return view('master.kategori.edit');
    }
}
