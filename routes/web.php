<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/uitloggen', function () {
    Auth::logout();
    return view('home');
});

