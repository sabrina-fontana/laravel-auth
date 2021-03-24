<?php

use Illuminate\Support\Facades\Route;

// indico di usare il namespace del PublicController
use App\Http\Controllers\PublicFlowerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// *************************************************************
// unica rotta pubblica
Route::get('flowers', 'PublicFlowerController@index')->name('public-flowers.index'); // nome della rotta index in PublicController

// tutte le altre necessitano di authentication
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {
        Route::resource('flowers', PrivateFlowerController::class);
    });