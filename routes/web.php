<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/apie-mus', [\App\Http\Controllers\HomeController::class, 'apie_mus'])->name('apie-mus');

Route::get('/paslaugos', [\App\Http\Controllers\HomeController::class, 'paslaugos'])->name('paslaugos');

Route::get('/kontaktai', [\App\Http\Controllers\HomeController::class, 'kontaktai'])->name('kontaktai');

Route::get('/atsiliepimai', [\App\Http\Controllers\AtsiliepimaiController::class, 'index'])->name('atsiliepimai');
