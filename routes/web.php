<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TrailerController;

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

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/trailers/create', [TrailerController::class, 'create'])->name('trailers.create');

Route::post('/trailers/store', [TrailerController::class, 'store'])->name('trailers.store');

Route::get('/trailers/index', [TrailerController::class, 'index'])->name('trailers.index');

Route::get('/trailers/show/{trailers}', [TrailerController::class, 'show'])->name('trailers.show');

Route::get('/trailers/delete/{trailers}', [TrailerController::class, 'showdelete'])->name('trailers.delete');

Route::delete('/trailers/canc/{trailers}', [TrailerController::class, 'canc'])->name('trailers.canc');

