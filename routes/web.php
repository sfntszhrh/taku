<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes || semua link di atur disini ya ||
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontController::class, 'index'])->name('front.home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home.index');
    Route::resource('category', CategoryController::class);
    Route::resource('place', PlaceController::class);
});
Route::get('/', [FrontController::class, 'index'])->name('front.home');
Route::get('/front/maps', [FrontController::class, 'maps'])->name('peta.wisata');
Route::get('/front/places', [FrontController::class, 'places'])->name('tempat.wisata');
Route::get('/front/places/{id}', [FrontController::class, 'show'])->name('tempat.detil');

// Route::group(['prefix' => 'admin'], function() {

// })

require __DIR__.'/auth.php';
