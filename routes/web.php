<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TaskController::class, 'index']);
Route::get('/task/{id}', [TaskController::class, 'showTodos']);
Route::get('/task/delete/{id}', [TaskController::class, 'deleteTodos']);
Route::get('/orderedTask', [TaskController::class, 'order']);
// Route::get('/', [TaskController::class, 'order']);
