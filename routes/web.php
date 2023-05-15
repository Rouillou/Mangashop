<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/article', function () {
    return view('article');
});

Route::get('/categorie', function () {
    return view('categorie');
});

Route::get('/formulaire', function () {
    return view('formulaire');
});

Route::get('/merchandising', function () {
    return view('merchandising');
});

Route::get('/panier', function () {
    return view('panier');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/tendance', function () {
    return view('tendance');
});
