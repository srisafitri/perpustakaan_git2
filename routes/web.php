<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login',[AuthController::class, 'login']);
    Route::post('/authenticate', [AuthController::class, 'authenticate']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/proses-register', [AuthController::class, 'prosesRegister']);
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index']);
Route::get('/books',[BookController::Class, "index"]);
Route::get('/books/create', [BookController::class,'create']);
Route::post('/books/save', [BookController::class, 'save']);
Route::get('/books/edit/{id}', [BookController::class, 'edit']);
Route::put('/books/update/{id}', [BookController::class, 'update']);
Route::delete('/books/delete/{id}', [BookController::class, 'destroy']);

Route::get('/students',[StudentsController::Class, "index"]);
Route::get('/students/create', [StudentsController::class, 'create']);
Route::post('/students/save', [StudentsController::class, 'save']);
Route::get('/students/edit/{id}', [StudentsController::class, 'edit']);
Route::put('/students/update/{id}', [StudentsController::class, 'update']);
Route::delete('/students/delete/{id}', [StudentsController::class, 'destroy']);

Route::get('/operators',[OperatorController::Class, "index"]);
Route::get('/operators/create', [OperatorController::Class, "create"]);
Route::post('/operators/save', [OperatorController::class, 'save']);
Route::get('/operators/edit/{id}', [OperatorController::class, 'edit']);
Route::put('/operators/update/{id}', [OperatorController::class, 'update']);
Route::delete('/operators/delete/{id}', [OperatorController::class, 'destroy']);

Route::get('/profil', [ProfilController::Class, "index"]);
Route::put('/changepassword/{id}', [ProfilController::class, 'changePassword']);


Route::post('/logout', [AuthController::class, 'logout']);
});



