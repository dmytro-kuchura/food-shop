<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index'])->name('home');

Route::get('/login', [SiteController::class, 'index'])->name('login');
Route::get('/register', [SiteController::class, 'index'])->name('register');

Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::get('/{alias}', [NewsController::class, 'inner'])->name('news.inner');
});

Route::prefix('shop')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/{category}', [ShopController::class, 'category'])->name('shop.category');
    Route::get('/{alias}/p{id}', [ShopController::class, 'item'])->name('shop.item');
});

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/thank', [CheckoutController::class, 'thank'])->name('thank');

Route::get('/wishlist', 'WishlistController@wishlist')->name('wishlist');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/payments', 'SiteController@about')->name('payments');
Route::get('/delivery', 'SiteController@about')->name('delivery');
Route::get('/contact', 'SiteController@contacts')->name('contacts');
Route::get('/search', 'SiteController@search')->name('search');

Route::get('/{slug}', 'PagesController@page')->name('page');
