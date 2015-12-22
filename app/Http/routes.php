<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Création des routes pour le contrôleur implicite SondageController
Route::controller('sondage', 'SondageController');

Route::get('/', function () {
    return view('welcome');
});
