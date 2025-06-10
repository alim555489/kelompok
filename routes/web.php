<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/', function () {
    return view ('home');
});

Route::get('/about', function () {
    return view ('about');
});

Route::get('/blog', function () {
    return view ('blog');
});

Route::get('/blog-details', function () {
    return view ('blog-details');
});

Route::get('/checkout', function () {
    return view ('checkout');
});

Route::get('/class', function () {
    return view ('class');
});

Route::get('/contact', function () {
    return view ('contact');
});

Route::get('/main', function () {
    return view ('main');
});

Route::get('/shop', function () {
    return view ('shop');
});

Route::get('/shop-details', function () {
    return view ('shop-details');
});

Route::get('/shoping-cart', function () {
    return view ('shoping-cart');
});

Route::get('/wisslist', function () {
    return view ('wisslist');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
