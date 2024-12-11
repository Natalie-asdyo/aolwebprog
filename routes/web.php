<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\RatingController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//auth
Auth::routes();

//buyer
Route::middleware(['auth', 'role:buyer'])->group(function () {
    Route::get('/buyer/home', [HomeController::class, 'buyerHome'])->name('buyer.home');
    Route::get('/buyer/search', [ProductController::class, 'search'])->name('buyer.search');
    Route::get('/buyer/transaction', [TransactionController::class, 'index'])->name('buyer.transaction');
    Route::get('/buyer/rating', [RatingController::class, 'index'])->name('buyer.rating');
    Route::post('/buyer/rating', [RatingController::class, 'store']);
});

//seller
Route::middleware(['auth', 'role:seller'])->group(function () {
    Route::get('/seller/home', [HomeController::class, 'sellerHome'])->name('seller.home');
    Route::get('/seller/product', [ProductController::class, 'create'])->name('seller.product.create');
    Route::post('/seller/product', [ProductController::class, 'store'])->name('seller.product.store');
    Route::get('/seller/products', [ProductController::class, 'index'])->name('seller.products');
    Route::get('/seller/article', [ArticleController::class, 'create'])->name('seller.article.create');
    Route::post('/seller/article', [ArticleController::class, 'store'])->name('seller.article.store');
});


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
