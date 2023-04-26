<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\TaskController;

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
    return view('welcome');
});
Route::get('/usuarios', [UserController::class,  'index']);
Route::get('/usuarios/criar', [UserController::class,  'create']);
Route::post('/usuarios/salvar', [UserController::class,  'store']);

Route::get('/tarefas', [TaskController::class,  'index']);
