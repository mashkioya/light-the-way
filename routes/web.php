<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'greeting' => "Welcome",
    'person' => request('person', 'World')
]);
Route::view('/about', 'about');
Route::view('/contact', 'contact');
