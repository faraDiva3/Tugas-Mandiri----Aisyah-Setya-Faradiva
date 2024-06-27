<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/programming-languages', function () {
    $languages = ['php', 'java', 'c', 'javascript', 'dart'];
    
    // Menggabungkan satu string yang dipisahkan oleh koma dan spasi
    return implode(', ', $languages);
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/tabel', [PageController::class, 'dataTabel']);
// Route::get('/siswa', [SiswaController::class, 'index']);
Route::resource('siswa', SiswaController::class);
