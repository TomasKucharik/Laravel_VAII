<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


//Pokedex
Route::get('pokedexes', [\App\Http\Controllers\PokedexController::class, 'index']);

Route::get('add-pokedex', [\App\Http\Controllers\PokedexController::class, 'create']);
Route::post('add-pokedex', [\App\Http\Controllers\PokedexController::class, 'store']);
Route::get('edit-pokedex/{id}', [\App\Http\Controllers\PokedexController::class, 'edit']);
Route::put('update-pokedex/{id}', [\App\Http\Controllers\PokedexController::class, 'update']);
Route::get('delete-pokedex/{id}', [\App\Http\Controllers\PokedexController::class, 'destroy']);




Route::resource('pokedex', \App\Http\Controllers\PokedexController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('user', UserController::class);
    Route::get('user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');


});


