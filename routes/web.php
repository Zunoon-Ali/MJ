<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard/admin', fn() => view('dashboard.admin.dashboard'));
    Route::resource('home-content', \App\Http\Controllers\HomePageContentController::class);
    Route::resource('about-content', \App\Http\Controllers\AboutPageContentController::class);
    Route::resource('contact-content', \App\Http\Controllers\ContactPageContentController::class);
    Route::resource('products', \App\Http\Controllers\ProductController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class)->only(['index', 'destroy']);
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard/user', fn() => view('dashboard.user.dashboard'));
});



require __DIR__ . '/auth.php';

Route::get('/', function () {
    $products = \App\Models\Product::where('is_active', true)->latest()->take(4)->get();
    return view('index', compact('products'));
})->name('home');


Route::get('/about', function () {
    return view('about');
});


Route::get('/product', function () {
    $products = \App\Models\Product::where('is_active', true)->latest()->get();
    return view('product', compact('products'));
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
    return view('auth.account');
})->name('account');
