<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('test-redirect', function () {
    User::first();

    return redirect()->to('https://www.google.com');
});
