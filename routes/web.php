<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-sono', function () {
    return view('about');
});

Route::get('/contatti', function () {
    return view('contact');
});

Route::get('/servizi', function () {
    $nome = 'Francesco';
    $array = ['siti', 'cucina', 'marketing', 'consulenza'];
    return view('service', ['servizi' => $array, 'nome' => $nome]);
});

Route::get('/dettaglio-servizio/{service}', function ($service) {
    return view('detail', ['ciccio' => $service]);
});
