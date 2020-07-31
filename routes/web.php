<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Auth::routes(); aaaa

Route::get('/home', 'HomeController@index')->name('home');
