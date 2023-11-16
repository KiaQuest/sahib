<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

use App\Http\Controllers\test;

Route::get('/create', [test::class, 'test']);
Route::get('/table', [test::class, 'test2']);
//Route::get('/myProducts', [test::class, 'test2']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/myProducts', [ProductController::class, 'show'])->name('myproducts');
Route::get('/products2', [ProductController::class, 'create'])->name('create.product');
Route::get('/update', [ProductController::class, 'update'])->name('update.product');
Route::get('/update2', [ProductController::class, 'store'])->name('update.product.do');
Route::get('/routes', [ProductController::class, 'routes'])->name('');
