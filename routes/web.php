<?php

use App\Http\Controllers\AboutPageContentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactPageContentController;
use App\Http\Controllers\ContactSubmissionController;
use App\Http\Controllers\HomePageContentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TestimonialCardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Models\ContactPageContent;
use App\Models\HomePageContent;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\TestimonialCard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('home-content', HomePageContentController::class);
    Route::resource('about-content', AboutPageContentController::class);
    Route::resource('contact-content', ContactPageContentController::class);
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class)->only(['index', 'destroy']);
    Route::resource('testimonial-cards', TestimonialCardController::class)->except(['show', 'create', 'edit']);
    Route::resource('reviews', ReviewController::class)->only(['index', 'update', 'destroy']);
    Route::resource('orders', OrderController::class)->only(['index', 'show', 'update', 'destroy']);
    Route::resource('contact-submissions', ContactSubmissionController::class)->only(['index', 'update', 'destroy']);
});


Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard/user', function () {
        $userId = Auth::id();

        // Get user's purchased products (from order items)
        $purchasedProducts = \App\Models\OrderItem::whereHas('order', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->with(['product', 'order'])->latest()->get();

        // Order statistics
        $totalOrders = Order::where('user_id', $userId)->count();
        $pendingOrders = Order::where('user_id', $userId)
            ->whereIn('status', ['pending', 'processing', 'shipped'])
            ->count();
        $deliveredOrders = Order::where('user_id', $userId)
            ->where('status', 'delivered')
            ->count();

        // Total unique products purchased
        $totalProducts = $purchasedProducts->unique('product_id')->count();

        // Recent orders
        $recentOrders = Order::where('user_id', $userId)
            ->with('items')
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard.user.dashboard', compact(
            'purchasedProducts',
            'totalOrders',
            'pendingOrders',
            'deliveredOrders',
            'totalProducts',
            'recentOrders'
        ));
    })->name('user.dashboard');

    Route::get('/user/orders', [OrderController::class, 'userOrders'])->name('user.orders');
    Route::get('/user/orders/{id}', [OrderController::class, 'userOrderShow'])->name('user.orders.show');
    Route::get('/user/cart-items', [CartController::class, 'userCartItems'])->name('user.cart.items');
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

// AJAX Product Search Route
Route::get('/search-products', [ProductController::class, 'search'])->name('products.search');


Route::get('/contact', function () {
    $contact = ContactPageContent::first();
    return view('contact', compact('contact'));
});

// Contact form submission route
Route::post('/contact/submit', [ContactSubmissionController::class, 'store'])->name('contact.submit');



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


Route::get('/cart', [CartController::class, 'index'])->middleware('auth')->name('cart');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::patch('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');



Route::get('/checkout', function () {
    return view('checkout');
})->middleware('auth')->name('checkout');


Route::get('/account', function () {
    return view('auth.account');
})->name('account');
