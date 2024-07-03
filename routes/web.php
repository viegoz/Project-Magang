<?php

use App\Http\Controllers\EntryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entry', function () {
    return view('entry');
});

Route::post('/submit', [EntryController::class, 'submit'])->name('submit');