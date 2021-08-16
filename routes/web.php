<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group([
    'namespace' => 'Controllers'
], function() {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('jadwal', '\App\Http\Controllers\HomeController@jadwal')->name('jadwal-home');
    Route::get('pengumumanHome', '\App\Http\Controllers\HomeController@pengumumanHome')->name('pengumuman-home');
    Route::get('pengumuman-show/{pengumuman}', '\App\Http\Controllers\PengumumanController@show')->name('pengumuman-show');
    Route::get('galeri', '\App\Http\Controllers\HomeController@galeriHome')->name('galeri-home');
    Route::get('tentang', '\App\Http\Controllers\HomeController@tentang')->name('tentang-home');
    Route::get('tour', '\App\Http\Controllers\HomeController@tour')->name('tour-home');
});

Route::group([
    'namespace' => 'Controllers',
    'middleware' => 'auth'
], function() {
    Route::get('/admin', '\App\Http\Controllers\AdminController@index')->name('admin');

    Route::resource('pengumumanAdmin', '\App\Http\Controllers\PengumumanController');
    Route::get('/pengumumanAdmin/{pengumuman}/delete', '\App\Http\Controllers\PengumumanController@destroy')->name('pengumuman.delete');
    Route::get('/pengumumanAdmin/edit/{pengumuman}', '\App\Http\Controllers\PengumumanController@edit')->name('pengumuman.edit');
    Route::patch('/pengumumanAdmin/{pengumuman}', '\App\Http\Controllers\PengumumanController@update')->name('pengumuman.update');

    Route::resource('galeriAdmin', '\App\Http\Controllers\GaleriController');
    Route::get('/galeriAdmin/{galeri}/delete', '\App\Http\Controllers\GaleriController@destroy')->name('galeri.delete');
    Route::get('/galeriAdmin/edit/{galeri}', '\App\Http\Controllers\GaleriController@edit')->name('galeri.edit');
    Route::patch('/galeriAdmin/{galeri}', '\App\Http\Controllers\GaleriController@update')->name('galeri.update');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
