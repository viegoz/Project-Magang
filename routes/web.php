<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\MonitoringController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entry', function () {
    return view('entry');
})->name('entry');

Route::get('/update', function () {
    return view('update');
})->name('update');

Route::get('/monitoring', [MonitoringController::class, 'index'])->name('monitoring');

Route::post('/submit', [EntryController::class, 'submit'])->name('submit');

Route::get('/update/{id}', [DataController::class, 'edit'])->name('update.edit');
Route::put('/update/{id}', [DataController::class, 'update'])->name('update.update');

Route::get('/get-perihal-by-nde', [DataController::class, 'getPerihalByNde'])->name('getPerihalByNde');
Route::get('/get-perihal-by-nde-input', [DataController::class, 'getPerihalByNdeInput'])->name('getPerihalByNdeInput');
