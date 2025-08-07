<?php

use App\Http\Controllers\CheckController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use Stripe\Stripe;


Route::middleware('lan')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::post('/language-switch', [LanguageController::class, 'languageSwitch'])->name('language.switch');

    Route::get('/profile', function () {
        return view('profile');
    })->middleware(['auth'])->name('profile');

    Route::post('/profile/update', [ProfileController::class, 'update'])->middleware(['auth'])->name('profile.update');

   Route::get('/payment/base', [StripeController::class, 'byeBase'])->name('payment.base');
   Route::get('/payment/premium', [StripeController::class, 'byePremium'])->name('payment.premium');


});

//GOOGLE API

Route::get('/check/subscribe', [CheckController::class, 'subscribe'])->name('check.subscribe');

//GOOGLE AUTH
Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);
require __DIR__.'/auth.php';
