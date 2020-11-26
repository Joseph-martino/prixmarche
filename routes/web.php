<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource("User", "UserController");
Route::resource("Adress", "AdressController");
Route::resource("Category", "CategoryController");
Route::resource("Product", "ProductController");
Route::ressource("Cart", "CartController");
Route::resource("CartProduct", "CartProduct");