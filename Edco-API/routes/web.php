<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Beranda/Beranda');
});

Route::get('login', function () {
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



Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');





