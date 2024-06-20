<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uno', function () {
    return view('uno');
});

Route::get('/dos', function () {
    return view('dos');
});
