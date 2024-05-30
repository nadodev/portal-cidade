<?php


use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return view('site.home');
});


Route::get('/admin', function() {
    return Inertia::render('Admin/Welcome');
});


Route::get('/client', function() {
    return Inertia::render('Client/Welcome');
});
