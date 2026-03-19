<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

use App\Http\Controllers\BusquedaController;

Route::get('/buscar', [BusquedaController::class, 'buscar'])->name('buscar');