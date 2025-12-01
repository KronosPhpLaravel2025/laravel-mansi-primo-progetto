<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', [PageController::class, 'homepage']);
Route::get('/chi-sono', [PageController::class, 'about']);
Route::get('/contatti', [PageController::class, 'contact']);
Route::get('/dettaglio-servizio/{service}', [PageController::class, 'service']);

// Route::get('/dammi-il-pokemon/{name}', function ($name) {
//     $data = Http::get('https://pokeapi.co/api/v2/pokemon/' . $name)->json();

//     return view('example', ['data' => $data]);
// });

//CRUD

//INDEX
Route::get('/servizi', [PageController::class, 'services'])->name('servizi');

//Creazione
Route::get('/crea-servizio', [PageController::class, 'create']); //GET
Route::post('/salva-dati', [PageController::class, 'store']); //POST

//Mostra
Route::get('/mostrami-servizio/{key}', [PageController::class, 'show']);

//Modifca
Route::get('/modifica-servizio/{key}', [PageController::class, 'edit']);
Route::put('/aggiorna-dati/{key}', [PageController::class, 'update']);

//Cancellazione
Route::delete('/cancella-servizio/{key}', [PageController::class, 'destroy']);
