<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonationShelterController;
use App\Http\Controllers\TheMainController;
use App\Models\Shelter;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/shelter-about', function () {
    return view('shelter-blog.about');
})->name('shelter.about');



Route::get('/shelter', function () {
    return view('shelter-blog.index');
})->name('shelter.index');







Route::get('/Donate', [TheMainController::class, 'index'])->name('donate');
Route::get('/DonateInfo', [TheMainController::class, 'DonateInfo'])->name('donateInfo');
Route::get('/DonatePayment/{shelter}', [TheMainController::class, 'DonatePayment'])->name('donatePayment');
Route::get('/aboutUs', [TheMainController::class, 'aboutUs'])->name('aboutUs');
Route::get('/store', [TheMainController::class, 'store'])->name('storePayment');
Route::get('/Adoption', [TheMainController::class, 'Adoption'])->name('adoption');
Route::get('/store.card', [TheMainController::class, 'storecard'])->name('storeCard');
Route::get('/Signup', [TheMainController::class, 'SingUp'])->name('signup');



Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('massage', [CustomAuthController::class, 'otpmassage'])->name('otp');

Route::get('make.shelter', [DonationShelterController::class, 'index'])->name('addshelter');
Route::POST('save.shelter', [DonationShelterController::class, 'store'])->name('add.shelter');


Route::post('/savedonation/{shelter}', [DonationShelterController::class, 'store2'])->name('save.donation');