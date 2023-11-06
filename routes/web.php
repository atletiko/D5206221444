<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('perkalian','App\Http\Controllers\DosenController@index') ;
Route::get('show','App\Http\Controllers\DosenController@showBlog') ;
