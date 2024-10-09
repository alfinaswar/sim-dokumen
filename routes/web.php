<?php

use App\Http\Controllers\MasterKategoriController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('data-master')->group(function () {
        Route::get('kategori', [MasterKategoriController::class, 'index'])->name('kategori.index');
        Route::post('simpan-data', [MasterKategoriController::class, 'store'])->name('kategori.store');
        Route::get('create', [MasterKategoriController::class, 'create'])->name('kategori.create');
        Route::get('edit/{id}', [MasterKategoriController::class, 'edit'])->name('kategori.edit');
        Route::PUT('update/{id}', [MasterKategoriController::class, 'update'])->name('kategori.update');
        Route::DELETE('destroy/{id}', [MasterKategoriController::class, 'destroy'])->name('kategori.destroy');
    });
    Route::prefix('order')->group(function () {
        Route::get('detail/{id}', [OrderController::class, 'index'])->name('order.detail');
        Route::post('bayar', [OrderController::class, 'store'])->name('order.store');
        Route::post('cart', [OrderController::class, 'cart'])->name('order.cart');
        Route::get('history', [OrderController::class, 'history'])->name('order.history');
        Route::get('cart-view', [OrderController::class, 'cartview'])->name('order.cartview');
        Route::POST('gantistatus', [OrderController::class, 'gantistatus'])->name('order.gantistatus');
        Route::get('list-order', [OrderController::class, 'show'])->name('order.show');
        Route::get('konfirmasi/{id}', [OrderController::class, 'konfirmasi'])->name('order.konfirmasi');
        Route::delete('destroytrx/', [OrderController::class, 'destroytrx'])->name('order.destroytrx');
    });
});

