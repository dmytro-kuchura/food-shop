<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\DeliveryController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::prefix('cart')->group(function () {
        Route::get('list', [CartController::class, 'list'])->name('api.cart.list');
        Route::post('add', [CartController::class, 'add'])->name('api.cart.add');
        Route::delete('delete/{item}', [CartController::class, 'delete'])->name('api.cart.delete');
        Route::post('update', [CartController::class, 'update'])->name('api.cart.update');
    });

    Route::prefix('order')->group(function () {
        Route::post('create', [OrderController::class, 'create'])->name('api.order.create');
        Route::get('list', [OrderController::class, 'list'])->name('api.order.list');
    });

    Route::get('/deliveries', [DeliveryController::class, 'list'])->name('api.deliveries.list');
    Route::get('/payments', [PaymentController::class, 'list'])->name('api.payments.list');
});
