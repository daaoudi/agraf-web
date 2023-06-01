<?php

use App\Http\Controllers\ChargeController;
use App\Http\Controllers\DeviController;
use App\Http\Controllers\OuvrageController;
use App\Http\Controllers\PosteOuvrierController;
use App\Http\Controllers\ReglementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MatierController;
use App\Http\Controllers\OuvrierController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
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


//Landing Page
Route::get('/', function () {
    return view('main.home');
});




//Authentification
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    return redirect('/dashboard');

});
Route::get('/logout',[LoginController::class,"logout"]);


Route::middleware(['auth'])->group(function () {
    //Les resources d'application
    Route::get('/dashboard',[DashboardController::class,"index"])->name('dashboard');
    Route::resource('clients',ClientController::class);
    Route::resource('services',ServiceController::class);
    Route::resource('fournisseurs',FournisseurController::class);
    Route::resource('ouvriers',OuvrierController::class);
    Route::resource('devis',DeviController::class);
    Route::resource('ouvrages',OuvrageController::class);
    Route::resource('posteOuvriers',PosteOuvrierController::class);
    Route::resource('reglements',ReglementController::class);
    Route::resource('charges',ChargeController::class);
});