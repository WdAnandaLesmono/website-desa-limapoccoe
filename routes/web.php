<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::resource('/admin', AdminController::class);

Route::get('/', [BerandaController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/tentang-kami/visi-misi', function () {
    return view('visimisi');
});

Route::get('/tentang-kami/sejarah', function () {
    return view('sejarah');
});

Route::get('/tentang-kami/geografis-desa', function () {
    return view('geografisdesa');
});

Route::get('/tentang-kami/demografi-desa', function () {
    return view('demografidesa');
});

Route::get('/tentang-kami/potensi-desa', function () {
    return view('potensidesa');
});

Route::get('/pemerintahan/struktur-organisasi', function () {
    return view('strukturorganisasi');
});

Route::get('/pemerintahan/aparat-desa', function () {
    return view('aparatdesa');
});