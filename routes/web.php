<?php

use App\Http\Controllers\AboutPageContentController;
use App\Http\Controllers\ContactPageContentController;
use App\Http\Controllers\HomePageContentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TestimonialCardController;
use App\Http\Controllers\UserController;
use App\Models\HomePageContent;
use App\Models\Product;
use App\Models\TestimonialCard;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard/admin', fn() => view('dashboard.admin.dashboard'));
    Route::resource('home-content', HomePageContentController::class);
    Route::resource('about-content', AboutPageContentController::class);
    Route::resource('contact-content', ContactPageContentController::class);
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class)->only(['index', 'destroy']);
    Route::resource('testimonial-cards', TestimonialCardController::class)->except(['show', 'create', 'edit']);
    Route::resource('reviews', ReviewController::class)->only(['index', 'update', 'destroy']);
    Route::resource('orders', OrderController::class)->only(['index', 'show', 'update', 'destroy']);
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard/user', fn() => view('dashboard.user.dashboard'));
    Route::get('/user/orders', [OrderController::class, 'userOrders'])->name('user.orders');
    Route::get('/user/orders/{id}', [OrderController::class, 'userOrderShow'])->name('user.orders.show');
});



require __DIR__ . '/auth.php';

Route::get('/', function () {
    $products = Product::where('is_active', true)->latest()->take(4)->get();
    $home = HomePageContent::first();
    $testimonials = TestimonialCard::all();
    return view('index', compact('products', 'home', 'testimonials'));
})->name('home');


Route::get('/about', function () {
    return view('about');
});


Route::get('/product', function () {
    $products = Product::where('is_active', true)->latest()->get();
    return view('product', compact('products'));
});


Route::get('/contact', function () {
    return view('contact');
});



Route::get('/product-detail/{id}', function ($id) {
    $product = Product::with('reviews')->findOrFail($id);
    return view('product-detail', compact('product'));
})->name('product.detail');

// Review submission route (accessible to all)
Route::post('/product/{product}/review', [ReviewController::class, 'store'])->name('review.store');

// Order routes
Route::post('/orders', [OrderController::class, 'store'])->middleware('auth')->name('orders.store');
Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');


Route::get('/cart', function () {
    return view('cart');
})->middleware('auth')->name('cart');



Route::get('/checkout', function () {
    return view('checkout');
})->middleware('auth')->name('checkout');


Route::get('/account', function () {
    return view('auth.account');
})->name('account');
