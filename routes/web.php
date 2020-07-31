<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Auth::routes(); fff

Route::get('/home', 'HomeController@index')->name('home');
