<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// ------------------------------------------ PUBLIC VIEWS

// Home page



Route::get("/",  [ProductsController::class, 'index']);

Route::get('/products/{slug}', [ProductsController::class, 'show']);

Route::prefix('/category')->group(function () {
    Route::get('/{slug}', [ProductsController::class, 'index']);
});


Route::prefix('/admin')->group(function () {

    Route::view("/", "pages.admin.index");

    Route::prefix('/products')->group(function () {
        Route::get('/', [ProductsController::class, 'index']);
        Route::get('/{id}', [ProductsController::class, 'show']);
        Route::post('/', [ProductsController::class, 'create']);
        Route::patch('/{id}', [ProductsController::class, 'update']);
        Route::delete('/{id}', [ProductsController::class, 'destroy']);
    });
    Route::prefix('/categories')->group(function () {
        Route::get('/', [CategoriesController::class, 'index']);
        Route::get('/{id}', [CategoriesController::class, 'show']);
        Route::post('/', [CategoriesController::class, 'create']);
        Route::patch('/{id}', [CategoriesController::class, 'update']);
        Route::delete('/{id}', [CategoriesController::class, 'destroy']);
    });
});


Route::fallback(function () {
    return view('pages/404');
});
