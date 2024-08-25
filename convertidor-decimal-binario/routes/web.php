<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversionController;

Route::get('/', [ConversionController::class, 'index']);
Route::post('/convert', [ConversionController::class, 'convert'])->name('convert');

