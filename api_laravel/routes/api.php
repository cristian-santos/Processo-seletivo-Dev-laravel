<?php

use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::controller(ProdutoController::class)->prefix('produto')->group(function(){
//     Route::get('/index', [ProdutoController::class,'index'])->name('produto.index');
//     Route::post('/store', [ProdutoController::class, 'store'])->name('produto.store');
//     Route::get('/show/{id}', [ProdutoController::class, 'show'])->name('produto.show');
//     Route::put('/update/{id}', [ProdutoController::class, 'update'])->name('produto.update');
// });


Route::get('/produtos', [ProdutoController::class,'index']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);
Route::put('/produtos/{id}', [ProdutoController::class, 'update']);
Route::delete('produtos/{id}', [ProdutoController::class, 'destroy']);
