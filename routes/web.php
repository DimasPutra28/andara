<?php

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
// landing page
Route::get('/', function () {
    return view('home');
});

// sign up
Route::get('/register', function () {
    return view('register');
});

// login
Route::get('/login', function () {
    return view('login');
});

// lupa password 1
Route::get('/forgotpass', function () {
    return view('forgotpass');
});


// lupa password 2
Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

// home page
Route::get('/index', function () {
    return view('dashboard');
});

// berita
Route::get('/news', function () {
    return view('news');
});

//form pendaftaran pasien
Route::get('/daftarpasienbaru', function () {
    return view('daftarpasienbaru');
});

//pilih pasien
Route::get('/pasien', function () {
    return view('pilihpasien');
});

//form pendaftaran pemeriksaan
Route::get('/daftarperiksa', function () {
    return view('daftarperiksa');
});

// chat dokter
Route::get('/chat', function () {
    return view('chat');
});

// chat dokter 2
Route::get('/chatdokter', function () {
    return view('chat2');
});

//pembayaran
Route::get('/bayar', function () {
    return view('bayar');
});

// profile
Route::get('/profile', function () {
    return view('profile');
});

// riwayat medis
Route::get('/riwayatpasien', function () {
    return view('riwayat');
});




