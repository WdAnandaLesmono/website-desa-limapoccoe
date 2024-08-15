<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita', [
            'beritas' => Berita::all()
        ]);
    }

    public function showberita($id) 
    {
        $berita = Berita::findOrFail($id);

        return view('detailberita', [
            'berita' => $berita
        ]);
    }
}
