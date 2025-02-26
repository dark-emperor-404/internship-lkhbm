<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect('/dashboard')->with(['error' => 'Anda sedang login']);
        } else {
            return view('login');
        }
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect('/dashboard')->with(['success' => 'Login Berhasil']);
        } else {
            return redirect('/')->with(['error' => 'Email atau password salah']);
        }
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/')->with(['success' => 'Anda berhasil logout']);
    }
}
