<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EditoraController;
use App\Http\Controllers\Api\AutorController;
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
    Route::put('/editora/{editora}/{dados}', 'update')->name('editora.update');
    Route::delete('/editora/{editora}', 'destroy')->name('editora.destroy');
});

Route::controller(AutorController::class)->group(function () {
    Route::get('/autor', 'index')->name('autor.index');
    Route::post('/autor', 'store')->name('autor.store');
    Route::post('/autor/update/', 'update')->name('update2.store');
    Route::get('autor/sdsd/{id}', 'show')->name('autor.show');
    Route::delete('/autor/{autor}', 'destroy')->name('autor.destroy');
});


