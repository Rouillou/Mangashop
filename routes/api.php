<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('manga', [MangaController::class, 'index'])->name('manga.index');
Route::get('manga/{manga}', [MangaController::class, 'show'])->name('manga.show');
Route::post('manga', [MangaController::class, 'store'])->name('manga.store');
Route::put('manga/{manga}', [MangaController::class, 'update'])->name('manga.update');
Route::delete('manga/{manga}', [MangaController::class, 'destroy'])->name('manga.destroy');

Route::prefix('v1')->group(function () {
    Route::post('login', [UserAuthenticationController::class, 'login']);
    Route::post('register', [UserAuthenticationController::class, 'register']);
});


//These routes are protected using middleware
Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
    Route::post('logout', [UserAuthenticationController::class, 'logout']);
    Route::apiResource('products', ProductsController::class);
});