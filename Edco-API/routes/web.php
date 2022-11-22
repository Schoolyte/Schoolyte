<?php

use Illuminate\Support\Facades\Route;





Route::get('/login', function () {
    return view('login');
});

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');


Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');



