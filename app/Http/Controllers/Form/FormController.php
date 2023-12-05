<?php

namespace App\Http\Controllers\Form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('form.index');
    }
    public function edit()
    {
        return view('form.edit');
    }

}
