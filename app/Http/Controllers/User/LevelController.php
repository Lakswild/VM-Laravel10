<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LevelController extends Controller
{
    public function index()
    {
        return view('user.level.index');
    }

    public function add()
    {
        return view('user.level.add');
    }

    public function edit()
    {
        return view('user.level.edit');
    }
}
