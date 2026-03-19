<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// 1. Esta ruta sirve para VER la página (GET)
Route::get('/', function () {
    return view('welcome'); // Asegúrate de que tu archivo se llame welcome.blade.php
});

// 2. Esta ruta sirve para RECIBIR los datos del formulario (POST)
Route::post('/', function (Request $request) {
    // Por ahora solo recarga la página sin error
    return back(); 
});