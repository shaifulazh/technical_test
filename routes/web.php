<?php

use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {

//     return view('index');
// });

Route::get('/', [StudentController::class,'index']);
Route::get('add', [StudentController::class, 'add']);
Route::post('store', [StudentController::class, 'store']);
Route::get('delete/{id}', [StudentController::class, 'delete']);
Route::get('edit/{id}', [StudentController::class, 'edit']);
Route::post('update', [StudentController::class, 'update']);
Route::get('result/{id}', [StudentController::class , 'result'])->name('result');
Route::get('result_add/{id}',[StudentController::class, 'resultAdd']);
Route::post('result_insert', [StudentController::class, 'resultInsert']);
Route::get('result_edit/{id}',[StudentController::class, 'resultEdit']);
Route::post('result_update', [StudentController::class, 'resultUpdate']);
Route::get('result_delete/{id}', [StudentController::class, 'resultDelete']);
