<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\PaymentGateway;
use App\Livewire\Categoria;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// routes/web.php
Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/categorias', Categoria::class);

// Route::post('/payment/success', [PaymentController::class, 'success']);
// Route::post('/payment/webhook/stripe', [PaymentController::class, 'stripeWebhook']);

Route::get('/checkout', function () {
    return view('checkout');
});

require __DIR__.'/auth.php';
