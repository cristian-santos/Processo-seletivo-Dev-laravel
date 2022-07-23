<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('/produtos', [ProdutoController::class, 'store']);
    Route::put('/produtos/{id}', [ProdutoController::class, 'update']);
    Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);
    Route::delete('/deletar_usuario/{id}', [Authcontroller::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/produtos', [ProdutoController::class,'index']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);
Route::get('/listar_usuarios', [Authcontroller::class, 'index']);
Route::get('/listar_usuarios/{id}', [Authcontroller::class, 'show']);
Route::post('/registrar', [Authcontroller::class, 'registrar_usuario']);
Route::post('/login', [Authcontroller::class, 'login']);
