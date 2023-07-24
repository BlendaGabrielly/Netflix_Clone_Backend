<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmesController;

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
Route::post('/filmes/listar',[FilmesController::class,'create'])->name('filmes-create');
Route::get('/filmes', [FilmesController::class, 'index'])->name('filmes-listar');
Route::post('/filmes/criar', [FilmesController::class, 'create'])->name('filmes-create');
