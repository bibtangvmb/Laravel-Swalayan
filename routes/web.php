<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DetailTransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::get('generateData', [AuthController::class, 'generateData']);

Route::get('/', function () {
    return view('home');
})->middleware('is.auth');

Route::get('login', [AuthController::class, 'showLogin'])->middleware('is.not.auth');
Route::post('login', [AuthController::class, 'actionLogin'])->middleware('is.not.auth');

Route::middleware(['is.auth'])->group(function () {

  Route::get('logout', [AuthController::class, 'actionLogout']);

  Route::get('transactions', [TransactionController::class, 'index']);
  Route::get('transactions/create', [TransactionController::class, 'create']);


  Route::resource('customers', CustomerController::class);
  Route::resource('categories', CategoryController::class);
  Route::resource('users', UserController::class);
  Route::resource('stuffs', StuffController::class);


 
});


 // Route::get('customers', [CustomersController::class, 'index']); // menampilkan data tabel
  // Route::get('customers/create', [CustomersController::class, 'create']); // menampilka form untuk tambah data
  // Route::post('customers', [CustomersController::class, 'store']); // menyimpan data baru dari form tambah (add)
  // Route::get('customers/{customer}', [CustomersController::class, 'show']); // menampilkan form edit berdasarkan data yang terpilih
  // Route::put('customers/{customer}', [CustomersController::class, 'update']); // menyimpan data yang di edit melelui form edit
  // Route::post('customers/{customer}', [CustomersController::class, 'destroy']); // untuk menghapus data

 // Route::get('categories', [CategoriesController::class, 'index']); // menampilkan data tabel
 // Route::get('categories/create', [CategoriesController::class, 'create']); // menampilka form untuk tambah data
 // Route::post('categories', [CategoriesController::class, 'store']); // menyimpan data baru dari form tambah (add)
 // Route::get('categories/{categori}', [CategoriesController::class, 'show']); // menampilkan form edit berdasarkan data yang terpilih
 // Route::put('categories/{categori}', [CategoriesController::class, 'update']); // menyimpan data yang di edit melelui form edit
 // Route::post('categories/{categori}', [CategoriesController::class, 'destroy']); // untuk menghapus data

// Route::get('users', [UserController::class, 'index']); // menampilkan data tabel
// Route::get('users/create', [UserController::class, 'create']); // menampilka form untuk tambah data
// Route::post('users', [UserController::class, 'store']); // menyimpan data baru dari form tambah (add)
// Route::get('users/{user}', [UserController::class, 'show']); // menampilkan form edit berdasarkan data yang terpilih
// Route::put('users/{user}', [UserController::class, 'update']); // menyimpan data yang di edit melelui form edit
// Route::delete('users/{user}', [UserController::class, 'destroy']); // untuk menghapus data

// Route::get('stuffs', [StuffController::class, 'index']); // menampilkan data tabel
// Route::get('stuffs/create', [StuffController::class, 'create']); // menampilka form untuk tambah data
// Route::post('stuffs', [StuffController::class, 'store']); // menyimpan data baru dari form tambah (add)
// Route::get('stuffs/{stuff}', [StuffController::class, 'show']); // menampilkan form edit berdasarkan data yang terpilih
// Route::put('stuffs/{stuff}', [StuffController::class, 'update']); // menyimpan data yang di edit melelui form edit
// Route::delete('stuffs/{stuff}', [StuffController::class, 'destroy']); // untuk menghapus data





 
