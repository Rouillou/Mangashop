<?php

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

Route::get('/categorie', function () {
    return view('categorie');
});

Route::get('/article', function () {
    return view('article');
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



