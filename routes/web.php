<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;



Route::resource('job', JobController::class)->except(['show']);

Route::group([
    'prefix' => 'job',
    'as' => 'job.',
    'controller' => JobController::class,
], function () {
    Route::get('index', 'index')->name('index');
    Route::get('about', 'about')->name('about');
    Route::get('detail', 'jobDetail')->name('details');
    Route::get('list', 'jobList')->name('list');
    Route::get('category', 'category')->name('category');
    Route::get('contact', 'contact')->name('contact');
    Route::get('404', 'error404')->name('404');
    Route::get('testimonial', 'testimonial')->name('testimonial');
});



Route::get('/', function () {
    return view('welcome');
});
 
