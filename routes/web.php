<?php

use Illuminate\Support\Facades\Route;
//DOMINIO =http://127.0.0.1:8000/
//URI= /viola

//DOMINIO + URI
//URL= http://127.0.0.1:8000/viola



Route::get('/', function () {
    return view('welcome');
});

Route::get('chi-sono', function () {
    return 'sono io';
});

Route::get('contatti', function () {
    return 'mandami un messaggio';
});

//Rotta parametrica
Route::get('servizi/{nome}', function ($nome) {
    return 'Il mio servizio è: ' . $nome;
});
//chi-sono
//contatti

// Route::get('/viola', function () {

//     $students = ['Francesco', 'Viola'];
//     $a = 10;
//     $b = 15;
//     //return $a + $b;
//     return $students[1];
// });
