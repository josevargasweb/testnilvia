<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerritosController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/perritos', [PerritosController::class, 'obtenerPerritos']);

Route::post('/perritos', [PerritosController::class, 'ingresarPerrito']);

Route::get('/perritos/{id}', [PerritosController::class, 'obtenerPerrito']);

Route::delete('/perritos/{id}', [PerritosController::class, 'eliminarPerrito']);

Route::put('/perritos/{id}', [PerritosController::class, 'actualizarPerrito']);

