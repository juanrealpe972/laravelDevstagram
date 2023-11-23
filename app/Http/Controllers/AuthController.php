<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return view('principal');
        }

        return back()->withErrors([
            'username' => 'El usuario o la contraseña son incorrectos.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.register');
    }
}