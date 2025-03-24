<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return Inertia::render('posts/index');
})->name('posts.store');
