<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EditoraController;
use App\Http\Controllers\Api\AutorController;
use App\Http\Controllers\Api\GeneroController;
use App\Http\Controllers\Api\LivroController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::controller(EditoraController::class)->group(function () {
    Route::get('/editora', 'index')->name('editora.index');
    Route::post('/editora', 'store')->name('editora.store');
    Route::post('/editora/update/', 'update')->name('editora.store');
    Route::get('editora/{id}', 'show')->name('genero.show');
    Route::delete('/editora/{editora}', 'destroy')->name('editora.destroy');
});

Route::controller(AutorController::class)->group(function () {
    Route::get('/autor', 'index')->name('autor.index');
    Route::post('/autor', 'store')->name('autor.store');
    Route::post('/autor/update/', 'update')->name('update.store');
    Route::get('autor/{id}', 'show')->name('autor.show');
    Route::delete('/autor/{autor}', 'destroy')->name('autor.destroy');
});

Route::controller(GeneroController::class)->group(function () {
    Route::get('/genero', 'index')->name('genero.index');
    Route::post('/genero', 'store')->name('genero.store');
    Route::post('/genero/update/', 'update')->name('genero.store');
    Route::get('genero/{id}', 'show')->name('genero.show');
    Route::delete('/genero/{autor}', 'destroy')->name('genero.destroy');
});

Route::controller(LivroController::class)->group(function () {
    Route::get('/livro', 'index')->name('livro.index');
    Route::post('/livro', 'store')->name('livro.store');
    Route::post('/livro/update/', 'update')->name('livro.store');
    Route::get('livro/{livro}', 'show')->name('livro.show');
    Route::delete('/livro/{livro}', 'destroy')->name('livro.destroy');

});
Route::get('/getDados',[LivroController::class,'getDadosSelect']);

