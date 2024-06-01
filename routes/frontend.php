<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::view('home', 'frontend.index')->name('home');
// Route::view('home/store', 'frontend.store')->name('home.store');
Route::view('home/about', 'frontend.about')->name('home.about');
Route::get('home/gallery', [FrontendController::class, 'gallery'])->name('home.gallery');
Route::get('home/news', [FrontendController::class, 'news'])->name('home.news');
Route::get('home/products', [FrontendController::class, 'print_store'])->name('home.store');
Route::view('home/contact', 'frontend.contact')->name('home.contact');
Route::view('home/cart', 'frontend.cart')->name('home.cart');
Route::get('home/product/{id}', [FrontendController::class, 'product'])->name('home.product');

Route::middleware('guest')->group(function () {
    Route::view('home/signin', 'frontend.signin')->name('home.signin');
    Route::view('home/signup', 'frontend.signup')->name('home.signup');
    Route::post('home/login', [FrontendController::class, 'login'])->name('home.login');
    Route::post('home/register', [FrontendController::class, 'register'])->name('home.register');
});

Route::middleware('auth')->group(function () {
    Route::delete('home/logout', [FrontendController::class, 'logout'])->name('home.logout');
});
