<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route default (sudah ada)
// Route::get('/', function () {
//     return view('pages.public.home');
// });
// home
Route::get('/', [HomeController::class, 'index'])->name('home');
// product
Route::get('/product', [ProductController::class, 'index'])->name('product');
// about
Route::get('/about', [AboutController::class, 'index'])->name('about');
// ✅ TAMBAHKAN INI - Route dashboard
Route::prefix('administrator')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', AdminProductController::class);
});



// Route auth dari Breeze (sudah ada)
require __DIR__ . '/auth.php';

// Route profile (tambahan jika perlu)
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
