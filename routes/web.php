<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MatierController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\OuvrierController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ChantierController;
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

Route::get('/', function () {
    return view('main.home');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    return redirect('/dashboard');

});

Route::get('/dashboard',[DashboardController::class,"index"])->name('dashboard');

Route::get('/logout',[LoginController::class,"logout"]);


/*
Route::get('/dashboard',function(){
    return view('dashboard');
});

Route::get('/user/{profile}',[LoginController::class, 'userProfile'])->name('user.profile');
Route::get('/dashboard_old', function () {
    return view('welcome');
});

Route::group(['middleware' => ['authenticate', 'roles']], function (){
    Route::get('/dashboard_old', function(){return view('dashboard');})->name('dashboard_old');
});
*/
// Route::middlware('auth')->group(function(){
    Route::resource('clients',ClientController::class);
    Route::resource('chantiers',ChantierController::class)->middleware('midch');
    Route::resource('services',ServiceController::class);
    Route::resource('fournisseurs',FournisseurController::class);
    Route::resource('matiers',MatierController::class);
    Route::resource('ouvriers',OuvrierController::class);
    Route::resource('articles',ArticleController::class);
// }


// );

