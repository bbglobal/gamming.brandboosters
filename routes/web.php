<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::controller(IndexController::class)->group(function () {
    Route::get('/',  'index')->name('home');
    Route::get('/services',  'services')->name('services');
    Route::get('/portfolio',  'portfolio')->name('portfolio');
    Route::get('/packages',  'packages')->name('packages');
    Route::get('/about',  'about')->name('about');
    Route::get('/testimonials',  'testimonials')->name('testimonials');
    Route::get('/privacy-and-policy',  'policy')->name('policy');
    Route::get('/contact',  'contact')->name('contact');
    Route::get('/animation',  'animation')->name('animation');
    Route::get('/comic',  'comic')->name('comic');
    Route::get('/graphics',  'graphics')->name('graphics');
});
