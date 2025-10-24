<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/about', function () {
    return view('about');
});


Route::get('/product', function () {
    return view('product');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/product-detail', function () {
    return view('product-detail');
})->name('product-detail');



Route::get('/cart', function () {
    return view('cart');
})->name('cart');



Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');


Route::get('/account', function () {
    return view('account');
})->name('account');