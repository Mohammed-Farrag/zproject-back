<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GalleriesController;
use App\Http\Controllers\Admin\NewsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/',function() {
 
   Artisan::call('storage:link');
   
   view('app');
});



Route::prefix('/dashboard')->group(function () {


    Route::middleware(['adminAuthCheck'])->group(function () {

        Route::get('/', [AdminController::class, 'dashboard']);

    
        Route::prefix('/news')->group(function () {
            Route::get('/', [NewsController::class, 'index'])->name('news.index');
            Route::get('/create', [NewsController::class, 'create'])->name('news.create');
            Route::post('/store', [NewsController::class, 'store'])->name('news.store');
            Route::view('/update', 'news.update')->name('news.update');
            Route::get('/delete', [NewsController::class, 'delete'])->name('news.delete');
        });

        Route::prefix('/galleries')->group(function () {
            Route::get('/', [GalleriesController::class, 'index'])->name('galleries.index');
            Route::get('/show', [GalleriesController::class, 'show'])->name('galleries.show');
            Route::view('/create', 'galleries.create')->name('galleries.create');
            Route::post('/store', [GalleriesController::class, 'store'])->name('galleries.store');
            Route::view('/update', 'galleries.update')->name('galleries.update');
            Route::get('/delete', [GalleriesController::class, 'delete'])->name('galleries.delete');
        });
        
        Route::prefix('/products')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('products.index');
            Route::get('/show', [ProductController::class, 'show'])->name('products.show');
            Route::get('/create', [ProductController::class, 'create'])->name('products.create');
            Route::post('/store', [ProductController::class, 'store'])->name('products.store');
            Route::get('/delete', [ProductController::class, 'delete'])->name('products.delete');
            Route::view('/update', 'products.update')->name('products.update');
        });

        Route::prefix('/categories')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
            Route::view('/create', 'categories.create')->name('categories.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
            Route::view('/update', 'categories.update')->name('categories.update');
        });
    });


    Route::get('/login', function () {
        return view('login');
    })->middleware('adminAlreadyLoggedin');
    Route::get('/register', function () {
        return view('register');
    })->middleware('adminAlreadyLoggedin');
});

Route::post('login', [AdminController::class, 'login'])->name('login');
Route::post('register', [AdminController::class, 'register'])->name('register');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');
