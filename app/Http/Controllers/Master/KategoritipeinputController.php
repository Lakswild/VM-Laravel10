<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoritipeinputController extends Controller
{
    public function index()
    {
        return view('master.kategoritipeinput.index');
    }

    public function add()
    {
        return view('master.kategoritipeinput.add');
    }

    public function edit()
    {
        return view('master.kategoritipeinput.edit');
    }
}
