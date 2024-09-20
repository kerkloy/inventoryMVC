<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\SaleController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::resource('/products', App\Http\Controllers\ProductController::class)->names('products');
Route::resource('/product-enrollment', App\Http\Controllers\OrderController::class)->names('product-enrollment');
Route::resource('/customers', App\Http\Controllers\CustomerController::class)->names('customers');
Route::resource('/suppliers', App\Http\Controllers\SupplierController::class)->names('suppliers');
Route::resource('/purchase-orders', App\Http\Controllers\PurchaseOrderController::class)->names('purchase-orders');
Route::resource('/purchase-history', App\Http\Controllers\SaleController::class)->names('purchase-history');

