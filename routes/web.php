<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'greeting' => "Welcome",
    'person' => request('person', 'World')
]);
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/articles', function() {
    $articles = session()->get('articles', []);
    return view('articles', [
        'articles' => $articles,
    ]);
});

Route::post('/articles', function() {
    $article = request()->article;
    session()->push('articles', $article);
    return redirect('/articles');
});

// Temporary
Route::get('/delete-articles', function() {
    session()->forget('articles');
    return redirect('/articles');
});
