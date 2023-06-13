<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\GamesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/helloworld', function () {
    echo 'Hello Wolrd';
});


Route::get('/', [MenuController::class, 'index']);


Route::controller(GamesController::class)->group(function(){
    Route::get('/games/index',  'index')->name('games.index');
    Route::get('/games/create', 'create')->name('games.create');
    Route::post('/games/store', 'store')->name('games.store');
    Route::delete('/games/destroy/{id}', 'destroy')->name('games.destroy');
    Route::get('/games/edit/{id}', 'edit')->name('games.edit');
    Route::put('/games/{id}', 'update')->name('games.update');
});

