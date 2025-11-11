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
