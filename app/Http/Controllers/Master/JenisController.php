<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JenisController extends Controller
{
    public function index()
    {
        return view('master.jenis.index');
    }

    public function add()
    {
        return view('master.jenis.add');
    }

    public function edit()
    {
        return view('master.jenis.edit');
    }
}
