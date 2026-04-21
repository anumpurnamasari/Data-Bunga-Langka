<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BungaLangkaController;

Route::get('/bunga', [BungaLangkaController::class, 'index']);
Route::get('/bunga/create', [BungaLangkaController::class, 'create']);
Route::post('/bunga/store', [BungaLangkaController::class, 'store']);
Route::get('/bunga/edit/{id}', [BungaLangkaController::class, 'edit']);
Route::post('/bunga/update/{id}', [BungaLangkaController::class, 'update']);
Route::delete('/bunga/{id}', [BungaLangkaController::class, 'destroy']);