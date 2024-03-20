<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/invoice', function () {
        return view('invoice');
    })->name('invoice');
    Route::get('/invoice/create', function () {
        return null;
    })->name('invoice/create');
});
