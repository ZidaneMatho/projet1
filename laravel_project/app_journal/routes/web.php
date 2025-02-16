<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('journal.index');
});
Route::get('/about', function () {
    return view('journal.about');
})->name('about');
Route::get('/connexion', function () {
    return view('journal.connexion');
});
Route::get('/login', function () {
    return view('journal.login');
});
Route::get('/temoignage', function () {
    return view('journal.temoignage');
});


Route::post('/connexion/traitement', [ClientController::class, 'traitement_inscription'])->name('traitement');
Route::post('/login/traitement', [ClientController::class, 'traitement_login'])->name('test');
