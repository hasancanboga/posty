<?php

use Illuminate\Support\Facades\Route;

// Route::get('/register',);

Route::get('/', function () {
    return view('posts.index');
});
