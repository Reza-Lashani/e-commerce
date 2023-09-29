<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('welcome');
Route::get('products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/categories/{category}', 'App\Http\Controllers\ProductCategoryController@index')->name('categories.index');
Route::post('/order/store', 'App\Http\Controllers\OrderController@store')->name('order.store');
Route::get('/search', 'App\Http\Controllers\ProductController@search')->name('product.search');
Route::get('/cart/{user_id}', 'App\Http\Controllers\CartController@index')->name('cart.index');


Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login')->middleware('login.redirect');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
