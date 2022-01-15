<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PokedexController;
use App\Http\Controllers\StadionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('home');
});

Auth::routes();


//Pokedex
Route::get('pokedexes', [PokedexController::class, 'index']);

Route::get('add-pokedex', [PokedexController::class, 'create']);
Route::post('add-pokedex', [PokedexController::class, 'store']);
Route::get('edit-pokedex/{id}', [PokedexController::class, 'edit']);
Route::put('update-pokedex/{id}', [PokedexController::class, 'update']);
Route::get('delete-pokedex/{id}', [PokedexController::class, 'destroy']);

//news

Route::get('news',[NewsController::class,'index']);
Route::get('add-news', [NewsController::class, 'create']);
Route::post('add-news', [NewsController::class, 'store']);
Route::get('edit-news/{id}', [NewsController::class, 'edit']);
Route::put('update-news/{id}', [NewsController::class, 'update']);
Route::get('delete-news/{id}', [NewsController::class, 'destroy']);
Route::get('newsUser',[NewsController::class,'indexUser']);

//stadion

Route::get('stadion',[StadionController::class,'index']);
Route::get('add-stadion', [StadionController::class, 'create']);
Route::post('add-stadion', [StadionController::class, 'store']);
Route::get('edit-stadion/{id}', [StadionController::class, 'edit']);
Route::put('update-stadion/{id}', [StadionController::class, 'update']);
Route::get('delete-stadion/{id}', [StadionController::class, 'destroy']);
Route::get('stadionUser',[StadionController::class,'indexUser']);

//game
Route::get('game',[GameController::class,'index']);
Route::get('add-game', [GameController::class, 'create']);
Route::post('add-game', [GameController::class, 'store']);
Route::get('edit-game/{id}', [GameController::class, 'edit']);
Route::put('update-game/{id}', [GameController::class, 'update']);
Route::get('delete-game/{id}', [GameController::class, 'destroy']);
Route::get('gameUser',[GameController::class,'indexUser']);







Route::resource('pokedex', PokedexController::class);
Route::resource('news', NewsController::class);
Route::resource('stadion', StadionController::class);
Route::resource('game', GameController::class);

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('user', UserController::class);
    Route::get('user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');



});


