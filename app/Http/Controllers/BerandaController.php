<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BerandaController extends Controller
{
    public function index()
    {
        session()->forget('isAdmin');
        return view('beranda', [
            'beritas' => Berita::all()
        ]);
    }
}
