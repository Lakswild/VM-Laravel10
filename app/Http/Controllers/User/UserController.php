<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('user.user.index');
    }

    public function add()
    {
        return view('user.user.add');
    }

    public function edit()
    {
        return view('user.user.edit');
    }
}
