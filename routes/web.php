<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', [PageController::class, 'homepage']);
Route::get('/chi-sono', [PageController::class, 'about']);
Route::get('/contatti', [PageController::class, 'contact']);
Route::get('/servizi', [PageController::class, 'services']);
Route::get('/dettaglio-servizio/{service}', [PageController::class, 'service']);

Route::get('/dammi-il-pokemon/{name}', function ($name) {
    $data = Http::get('https://pokeapi.co/api/v2/pokemon/' . $name)->json();

    return view('example', ['data' => $data]);
});
