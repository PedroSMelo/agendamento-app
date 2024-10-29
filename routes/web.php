<?php

use App\Http\Controllers\MensagensController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('mensagem', MensagensController::class);
