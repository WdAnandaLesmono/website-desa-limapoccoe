<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $adminEmail = 'desalimapoccoe07@gmail.com';
        $adminPassword = 'limapoccoe07desa';

        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if ($request->session()->has('isAdmin')) {
            $request->session()->forget('isAdmin');
        }

        if ($request->email === $adminEmail && $request->password === $adminPassword) {
            $request->session()->put('isAdmin', true);
            return redirect()->intended('/admin');
        } else {
            return back()->with('error', 'Login Gagal!');
        }
    }
}
