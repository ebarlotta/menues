<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\PaymentGateway;
use App\Livewire\Categoria;
use App\Livewire\Menu;
use App\Models\categoria as ModelsCategoria;

Route::get('/', function () { return view('welcome'); });
Route::get('/portfolio', function () { return view('portfolio'); });
Route::get('/nosotros', function () { return view('nosotros'); });
Route::view('/contacto', 'contacto')->name('contacto');
Route::get('/checkout', function () { return view('checkout'); });

Route::get('/dashboard', function () {
    $tarjetas=ModelsCategoria::where('habilitada',1)->get();
        return view('dashboard')->with(['tarjetas'=>$tarjetas]);
    })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

// routes/web.php

Route::get('categorias', Categoria::class);
Route::get('/menu', Menu::class)->name('menu');
Route::get('/menu/menueditar', ['Menu@editar'])->name('menueditar');

// Route::post('/payment/success', [PaymentController::class, 'success']);
// Route::post('/payment/webhook/stripe', [PaymentController::class, 'stripeWebhook']);

require __DIR__.'/auth.php';
