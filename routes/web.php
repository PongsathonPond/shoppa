<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RouteController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $product = Product::all();
    return view('welcome', compact('product'));
});

Route::get('/index', [RouteController::class, 'index'])->name('index');
Route::post('/addbooking/add', [RouteController::class, 'store'])->name('test');
Route::get('/products', [ProductController::class, 'index'])->name('products_index');
Route::post('/products/add', [ProductController::class, 'store'])->name('addproduct');
Route::get('/products/{id}', [ProductController::class, 'edit']);