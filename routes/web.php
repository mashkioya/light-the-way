<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/', function() {
    return view('welcome', [
        'greeting' => "Welcome",
        'person' => request('person', 'World')
    ]);
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/articles', function() {

    $articles = Article::all();
    return view('articles', [
        'articles' => $articles,
    ]);
});

Route::post('/articles', function() {
    $article = Article::create([
        'description' => request()->article,
    ]);

    return redirect('/articles');
});

// Temporary (not RESTful)
Route::get('/delete-articles', function() {
    session()->forget('articles');
    return redirect('/articles');
});
