<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function index()
    {
        return view('master.status.index');
    }

    public function add()
    {
        return view('master.status.add');
    }

    public function edit()
    {
        return view('master.status.edit');
    }
}
