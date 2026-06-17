<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('site.index');
});*/

Route::get('/',[\App\Http\Controllers\SiteController::class,'HomePage'])->name('home');
Route::get('/contact',[\App\Http\Controllers\SiteController::class,'Contact'])->name('contact');
Route::get('/about-us',[\App\Http\Controllers\SiteController::class,'About'])->name('about');
Route::get('/book-taxi',[\App\Http\Controllers\SiteController::class,'BookTaxi'])->name('book-taxi');
Route::get('/login',[\App\Http\Controllers\SiteController::class,'Login'])->name('login');
Route::post('/getOtp',[\App\Http\Controllers\LoginController::class,'Getotp'])->name('getotp');
Route::post('/verifyotp',[\App\Http\Controllers\LoginController::class,'VerifyOtp'])->name('verifyotp');

Route::post('/book-ride', [BookingController::class, 'bookRide'])->name('book-ride');
