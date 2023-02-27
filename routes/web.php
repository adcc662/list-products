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

//show all products in template

Route::get('/products', [ProductController::class, 'index'])->name('products');

//search products by name
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');

//search products by price
Route::get('/products/price', [ProductController::class, 'price'])->name('products.price');

//create new product
Route::post('/products/create', [ProductController::class, 'create'])->name('products.create');

//search products by price range
Route::get('/products/priceRange', [ProductController::class, 'priceRange'])->name('products.priceRange');