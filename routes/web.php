<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MatierController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\OuvrierController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ChantierController;
use App\Http\Controllers\FournisseurController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main.home');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('mainDashboard');
    })->name('dashboard');
    Route::get('/dashboard2', function () {
        return view('dashboard');
    });


});


Route::resource('clients',ClientController::class);
Route::resource('chantiers',ChantierController::class);
Route::resource('services',ServiceController::class);
Route::resource('fournisseurs',FournisseurController::class);
Route::resource('matiers',MatierController::class);
Route::resource('ouvriers',OuvrierController::class);
Route::resource('articles',ArticleController::class);

