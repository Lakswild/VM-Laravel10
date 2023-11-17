<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipeinputController extends Controller
{
    public function index()
    {
        return view('master.tipeinput.index');
    }

    public function add()
    {
        return view('master.tipeinput.add');
    }

    public function edit()
    {
        return view('master.tipeinput.edit');
    }
}
