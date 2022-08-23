<?php

use App\Http\Controllers\BoloController;
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

Route::get('/bolos', [BoloController::class, 'index'])->name('bolo.index');
Route::get('/bolos/{bolo}', [BoloController::class, 'show'])->name('bolo.show');
Route::post('/bolos', [BoloController::class, 'store'])->name('bolo.store');
Route::put('/bolos/{bolo}', [BoloController::class, 'update'])->name('bolo.update');
Route::delete('/bolos/{bolo}', [BoloController::class, 'destroy'])->name('bolo.destroy');

// OR...Laravel Resource Route
// Route::apiResource('bolos', BoloController::class);
