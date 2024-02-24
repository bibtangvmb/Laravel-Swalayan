<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StuffsController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/transaction',[TransactionsController::class,'index']);
Route::get('/transaction/add',[TransactionsController::class,'create']);

Route::get('customer',[CustomersController::class,'index']);
Route::get('customer/add',[CustomersController::class,'create']);

Route::get('Category',[CategoryController::class,'index']);
Route::get('Category/add',[CategoryController::class,'create']);

Route::get('User',[UserController::class,'index']);
Route::get('User/add',[UserController::class,'create']);

Route::get('Stuff',[StuffsController::class,'index']);
Route::get('Stuff/add',[StuffsController::class,'create']);










