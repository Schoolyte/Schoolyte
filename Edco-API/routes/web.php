<?php

use Illuminate\Support\Facades\Route;


<<<<<<< HEAD
=======
Route::get('/', function () {
    return view('Beranda/Beranda');
});
>>>>>>> ba22c0516619a1172ce9015a48467c9a1c89403f



Route::get('/login', function () {
    return view('login');
});
Route::get('Dashboard', function () {
    return view('Dashboard');
});
Route::get('Pendaftaran', function () {
    return view('Beranda/Pendaftaran');
});
Route::get('Feedback', function () {
    return view('Beranda/Feedback');
});
Route::get('Hal_utama', function () {
    return view('Berita/Hal_utama');
});
Route::get('Regisberita', function () {
    return view('Berita/Regisberita');
});
Route::get('Newspage', function () {
    return view('Berita/Newspage');
});
Route::get('Lihatrapor', function () {
    return view('rapor/Lihatrapor');
});
Route::get('Munculrapor', function () {
    return view('rapor/Munculrapor');
});
Route::get('Penilaiansiswa1', function () {
    return view('Penilaian/Penilaiansiswa1');
});


Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');


Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');



