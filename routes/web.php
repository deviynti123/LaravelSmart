<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DSSController;

Route::get('/', function () {
    return view('welcome');
});

// Route resource for alternatif
Route::resource('/alternatifs', \App\Http\Controllers\AlternatifController::class);

// Route resource for kriteria
Route::resource('/kriterias', \App\Http\Controllers\KriteriaController::class);

// Route for calculating SMART and displaying results
Route::get('/dss/result', [DSSController::class, 'calculateSmart'])->name('dss.result');
