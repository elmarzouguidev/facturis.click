<?php

use App\Http\Controllers\Facturis\Track\TrackerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/track', [TrackerController::class, 'index'])->name('tracker');

Route::get('/go/{shortURLKey}', '\AshAllenDesign\ShortURL\Controllers\ShortURLController');
