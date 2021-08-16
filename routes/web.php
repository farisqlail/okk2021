<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('jadwal', '\App\Http\Controllers\HomeController@jadwal')->name('jadwal-home');
Route::get('pengumumanHome', '\App\Http\Controllers\HomeController@pengumumanHome')->name('pengumuman-home');
Route::get('galeri', '\App\Http\Controllers\HomeController@galeriHome')->name('galeri-home');
Route::get('tentang', '\App\Http\Controllers\HomeController@tentang')->name('tentang-home');