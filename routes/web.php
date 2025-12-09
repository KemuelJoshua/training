<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Demos/Page1');
});

Route::get('page2', function () {
    return Inertia::render('Demos/Page2');
});

Route::get('page3', function () {
    return Inertia::render('Demos/Page3');
});

Route::get('page4', function () {
    return Inertia::render('Demos/Page4');
});
