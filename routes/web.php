<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\CartController;

// Auth Routes
Route::get('/login', [UserController::class, 'userlogin'])->name('user.login');
Route::post('/login', [UserController::class, 'loginProcess'])->name('user.login.post');
Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::get('/register', [UserController::class, 'create'])->name('user.register');
Route::post('/register', [UserController::class, 'store'])->name('user.store');
Route::match(['get', 'post'], '/logout', [UserController::class, 'logout'])->name('logout');

Route::resource('user', UserController::class)->only(['index', 'create', 'store'])
    ->names([
        'index' => 'user.index',
        'create' => 'user.create',
        'store' => 'user.store',
    ]);

/*
|--------------------------------------------------------------------------
| Dynamic Uncart Premium Marketplace Routes
|--------------------------------------------------------------------------
*/

// Flagship Marketplace (Home)
Route::get('/marketplace', [MarketplaceController::class, 'index'])->name('marketplace.index');

// Shop & Product Discovery
Route::get('/shop', [MarketplaceController::class, 'shop'])->name('shop.index');

// Product Details & Cart Page
Route::get('/product/{id?}', [MarketplaceController::class, 'product'])->name('product.index');
Route::get('/cart', [MarketplaceController::class, 'product'])->name('cart.index');

// Dynamic DB Cart API Routes
Route::get('/cart/api/get', [CartController::class, 'index'])->name('cart.api.get');
Route::post('/cart/api/add', [CartController::class, 'add'])->name('cart.api.add');
Route::post('/cart/api/update/{id}', [CartController::class, 'update'])->name('cart.api.update');
Route::match(['delete', 'post', 'get'], '/cart/api/remove/{id}', [CartController::class, 'remove'])->name('cart.api.remove');
Route::post('/cart/api/clear', [CartController::class, 'clear'])->name('cart.api.clear');

// Checkout & Order Confirmation
Route::get('/checkout', [MarketplaceController::class, 'checkout'])->name('checkout.index');

use App\Http\Controllers\AdminController;

// Admin Master Governance Portal
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::post('/admin/users', [AdminController::class, 'userStore'])->name('admin.users.store');
Route::delete('/admin/users/{id}', [AdminController::class, 'userDestroy'])->name('admin.users.destroy');

Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products');
Route::post('/admin/products', [AdminController::class, 'productStore'])->name('admin.products.store');
Route::delete('/admin/products/{id}', [AdminController::class, 'productDestroy'])->name('admin.products.destroy');

Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories');
Route::post('/admin/categories', [AdminController::class, 'categoryStore'])->name('admin.categories.store');
Route::put('/admin/categories/{id}', [AdminController::class, 'categoryUpdate'])->name('admin.categories.update');
Route::delete('/admin/categories/{id}', [AdminController::class, 'categoryDestroy'])->name('admin.categories.destroy');
Route::get('/admin/categories/{id}/products', [AdminController::class, 'categoryProducts'])->name('admin.categories.products');
Route::post('/admin/categories/move-product', [AdminController::class, 'categoryProductMove'])->name('admin.categories.move-product');

Route::get('/admin/carts', [AdminController::class, 'carts'])->name('admin.carts');
Route::delete('/admin/carts/{id}', [AdminController::class, 'cartDestroy'])->name('admin.carts.destroy');

// Vendor Studio Atelier Portal
Route::get('/vendor', function () {
    return view('vendor.index');
})->name('vendor.index');

// Brand Logo Component / Page
Route::get('/brand-logo', function () {
    return view('brand.logo');
})->name('brand.logo');
