<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\IndexController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/test', function () {
    return "123";
});


//frontend giao diện người dùng
Route::get('/', [HomeController::class, 'GetHome']);
Route::get('/about', [HomeController::class, 'GetAbout']);
Route::get('/contact', [HomeController::class, 'GetContact']);

Route::prefix('product')->group(function () {
    Route::get('/shop', [HomeController::class, 'GetShop']);
    Route::get('/detail', [HomeController::class, 'GetDetail']);
});

Route::prefix('checkout')->group(function () {
    Route::get('', [HomeController::class, 'GetCheckout']);
    Route::get('/complete', [HomeController::class, 'GetComplete']);
});

Route::prefix('cart')->group(function () {
    Route::get('', [HomeController::class, 'GetCart']);
});

//backend giao diện admin

Route::prefix('admin')->group(function () {
    Route::get('', [IndexController::class, 'GetIndex']);

    //login
    Route::get('login', [LoginController::class, 'GetLogin']);

    // Category
    Route::prefix('category')->group(function () {
        // add
        Route::match(['GET','POST'],'add',[CategoryController::class,'GetCategory'])->name('category.add');
        // edit
        Route::match(['GET','POST'],'edit/{id}',[CategoryController::class,'GetEditCategory'])->name('category.edit');
        // delete
        Route::get('delete/{id}',[CategoryController::class,'DeleteCategory'])->name('category.delete');
    });


    //product
    Route::prefix('product')->group(function () {
        Route::get('', [ProductController::class, 'GetProduct']);
        Route::get('/add', [ProductController::class, 'GetAddProduct']);
        Route::get('/edit', [ProductController::class, 'GetEditProduct']);

    });

    //user
    Route::prefix('user')->group(function () {
        Route::get('', [UserController::class, 'GetUser']);
        Route::get('/add', [UserController::class, 'GetAddUser']);
        Route::get('/edit', [UserController::class, 'GetEditUser']);
    });

    //order
    Route::prefix('order')->group(function () {
        Route::get('', [OrderController::class, 'GetOrder']);
        Route::get('/detail', [OrderController::class, 'GetDetailOrder']);
        Route::get('/processed', [OrderController::class, 'GetProcessed']);
    });


});
