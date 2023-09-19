<?php

use App\Http\Controllers\ProfileController;

use App\Mail\HelloMail;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\EnviarEmailController;
use Illuminate\Support\Facades\Mail;

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
   
   
   return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users/all', [ProfileController::class, 'all'])->name('usuarios');
});

Route::post('/enviar-email', [EnviarEmailController::class, 'enviarEmail'])->name('enviar.email');



require __DIR__.'/auth.php';    
