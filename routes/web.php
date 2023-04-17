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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/productdetail', function () {
    return view('productDetails');
})->name('productdetail');

Route::get('/payments', function () {
    return view('payments');
})->name('payments');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/acount', function () {
    return view('acount');
})->name('acount');