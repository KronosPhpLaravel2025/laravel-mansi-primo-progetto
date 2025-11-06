<?php

use Illuminate\Support\Facades\Route;

//https://www.w3schools.com/tags/tag_doctype.asp
Route::get('/', function () {
    return view('welcome');
});

Route::get('chi-sono', function () {
    return view('about');
});

Route::get('contatti', function () {
    return 'mandami un messaggio';
});
