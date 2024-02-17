<?php

use App\Http\Controllers\CartController;
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
Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::get('/login', [SiteController::class, 'index'])->name('login');
Route::get('/register', [SiteController::class, 'index'])->name('register');

Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::get('/{alias}', [NewsController::class, 'inner'])->name('news.inner');
});

Route::get('/wishlist', 'WishlistController@wishlist')->name('wishlist');
Route::get('/cart', 'CartController@cart')->name('cart');
Route::get('/checkout', 'CheckoutController@checkout')->name('checkout');
Route::get('/thank', 'CheckoutController@thank')->name('thank');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/payments', 'SiteController@about')->name('payments');
Route::get('/delivery', 'SiteController@about')->name('delivery');
Route::get('/contact', 'SiteController@contacts')->name('contacts');
Route::get('/search', 'SiteController@search')->name('search');
Route::get('/{slug}', 'PagesController@page')->name('page');
