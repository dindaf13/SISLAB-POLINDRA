<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login() {
        return view('auth.login');
    }

    function test_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => "Email wajib diisi",
            'password.required' => "Password wajib diisi",
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)) {
            if(Auth::user()->role == 'admin'){
                return redirect('/dashboard');
            } elseif (Auth::user()->role == 'mahasiswa'){
                return redirect('/dashboard_mhs');
        } else{
            return redirect('')->withErrors('Username dan Password yang dimasukkan tidak sesuai')->withInput();
        }
        }
    }

    function forgot_password() {
        return view('auth.forgot_password');
    }
}  
