<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsuransiController;

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

Route::get('asuransi', [AsuransiController::class, 'index']);
Route::post('asuransi', [AsuransiController::class, 'store']);
Route::get('asuransi/{id}', [AsuransiController::class, 'show']);
Route::put('asuransi/{id}', [AsuransiController::class, 'update']);
Route::delete('asuransi/{id}', [AsuransiController::class, 'destroy']);
Route::patch('asuransi/{id}', [AsuransiController::class, 'patch']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();  
});
