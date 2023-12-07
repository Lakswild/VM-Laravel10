<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $ip = $request->ip();
        $userAgent = $request->header('User-Agent');

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:user'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validate();

        $user = User::where('email', $validated['email'])->first();

        if (password_verify($validated['password'], $user->password)) {

            Session::put('user', $user, 60 * 24);

            return redirect()->route('app.dashboard');
        } else {
            $validator->errors()->add(
                'password',
                'The password does not match with email'
            );
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function logout(Request $request)
    {
        Session::forget('user');
        return redirect()->route('auth.login');
    }
}
