<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('withCors')->group(function() {
    
    
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');
    
    
    Route::post('/register', [UsersController::class, 'register']);
    Route::post('/login', [UsersController::class, 'login']);
    
    
    
    Route::prefix('/gallery')->group( function() {
        Route::get('/', [GalleriesController::class, 'index']);
        Route::get('/{id}', [GalleriesController::class, 'show']);
    });
    
    
    Route::prefix('/new')->group( function() {
        Route::get('/', [NewsController::class, 'index']);
        Route::get('/{id}', [NewsController::class, 'show']);
        Route::post('/setactive/{id}', [NewsController::class, 'makeActive']);
    });
    
    
    Route::prefix('/category')->group( function() {
        Route::get('/', [CategoryController::class, 'index']);
    });
    
    Route::prefix('/product')->group( function() {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/{id}', [ProductController::class, 'show']);
    });
    Route::prefix('/review')->group( function() {
        Route::get('/', [ReviewsController::class, 'index']);
        Route::post('/', [ReviewsController::class, 'store']);
    });

    
    Route::get('/comment/{newId}', [CommentsController::class, 'index']);
    Route::post('/new', [CommentsController::class, 'create']);

    
    
    
});



