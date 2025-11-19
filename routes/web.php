<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage']);
Route::get('/chi-sono', [PageController::class, 'about']);
Route::get('/contatti', [PageController::class, 'contact']);
Route::get('/servizi', [PageController::class, 'services']);
Route::get('/dettaglio-servizio/{service}', [PageController::class, 'service']);
