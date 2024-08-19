<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('job/index', function () {
    return view('index');
});
Route::get('job/about', function () {
    return view('about');
});