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

Route::get('/', function () {
    return redirect('products');
});

Route::resources([
    'users' => 'UserController',
    'products' => 'ProductController',
]);
Route::get('carts', "BasketController@show")->name('cart.show');
Route::post('carts/add/{product}', "CartController@add")->name('cart.add');
Route::get('carts/remove/{product}', "CartController@remove")->name('cart.remove');
Route::get('carts/empty', "CartController@empty")->name('cart.empty');