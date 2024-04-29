<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('auth', [ApiController::class, 'auth']);

    Route::get('/stuffs', [ApiController::class, 'stuff']); // mengambil semua data
    Route::post('/stuffs', [ApiController::class, 'suffAdd']); //SImpan data baru
    Route::put('/stuffs/{stuff}', [ApiController::class, 'suffUpdate']); // Update data
    Route::delete('/stuffs/{stuff}', [ApiController::class, 'suffDelete']); // delete data

    Route::post('/transaction/{save}', [ApiController::class,'saveTransactions']);  // Delete data
});

Route::post('login', [ApiController::class, 'login']); 