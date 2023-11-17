<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerController extends Controller
{
    public function index()
    {
        return view('setting.per.index');
    }

    public function add()
    {
        return view('setting.per.add');
    }

    public function edit()
    {
        return view('setting.per.edit');
    }
}
