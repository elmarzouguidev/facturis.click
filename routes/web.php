<?php

use App\Http\Controllers\Facturis\Track\TrackerController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::redirect('/','https://facturis.ma/');


Route::get('/go/{shortURLKey}', '\AshAllenDesign\ShortURL\Controllers\ShortURLController');

Route::group(['prefix' => config('facturis.admin_url')], function () {
    Voyager::routes();
});
