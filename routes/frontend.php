<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

    




Route::view('/', 'frontend.index')->name('home');
Route::view('about', 'frontend.about')->name('about');
Route::get('gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('new', [FrontendController::class, 'news'])->name('news');
Route::get('store', [FrontendController::class, 'print_store'])->name('store');

Route::view('contact', 'frontend.contact')->name('contact');
Route::view('cart', 'frontend.cart')->name('cart');
Route::get('product/{id}', [FrontendController::class, 'product'])->name('product');

Route::middleware('guest')->group(function () {
    Route::view('signin', 'frontend.signin')->name('signin');
    Route::view('signup', 'frontend.signup')->name('signup');
    Route::post('front/login', [FrontendController::class, 'login'])->name('frontend.login');
    Route::post('front/register', [FrontendController::class, 'register'])->name('frontend.register');
});

Route::middleware('auth')->group(function () {
    Route::delete('front/logout', [FrontendController::class, 'logout'])->name('frontend.logout');
});
