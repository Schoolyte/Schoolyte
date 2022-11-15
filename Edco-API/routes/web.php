<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Beranda');
});

Route::get('login', function () {
    return view('login');
});


Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');





