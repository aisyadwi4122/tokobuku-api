<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    // return $request->user();
// });
Route::get('/bukus/search', [BukuController::class,'search']);
Route::apiResource('kategoris',KategoriController::class);
Route::apiResource('bukus',BukuController::class);
// Route::get('/bukus/{id}',[BukuController::class,'show']);
// Route::put('bukus/{id}', [BukuController::class, 'update']);
// Route::delete('/bukus/{id}',[BukuController::class, 'destroy']);
