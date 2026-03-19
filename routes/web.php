<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'person' => request('person', 'World')
]);
Route::view('/about', 'about');
Route::view('/contact', 'contact');
