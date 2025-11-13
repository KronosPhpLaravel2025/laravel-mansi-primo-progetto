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
    //$array = ['siti', 'cucina', 'marketing', 'consulenza'];

    $array = [
        [
            'key' => 'siti-web',
            'name' => 'Creazione Siti Web',
            'icon' => 'https://cdn-icons-png.flaticon.com/512/1006/1006771.png'
        ],
        ['key' => 'cucina', 'name' => 'Ricette di Cucina', 'icon' => ''],
        ['key' => 'marketing-web', 'name' => 'Marketing Per tutti', 'icon' => ''],
        ['key' => 'consulenza-web', 'name' => 'Consulenza Siti Web', 'icon' => ''],

    ];
    return view('service', ['servizi' => $array, 'nome' => $nome]);
});

Route::get('/dettaglio-servizio/{service}', function ($service) {
    //leggere il parametro $service
    //dichiarare array $array
    //ciclo tutti gli elementi array
    //verifico se parametro esiste dentro array


});
