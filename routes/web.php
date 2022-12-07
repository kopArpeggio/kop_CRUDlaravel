<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manage', [UserController::class, 'index']);
Route::get('/manage/add', [UserController::class,'add']);
Route::post('/manage/insert', [UserController::class,'insert'])->name('insert');
Route::get('/manage/edit/{id}', [UserController::class,'edit']);
Route::post('/manage/update/{id}', [UserController::class,'update']);
Route::get('/manage/del/{id}', [UserController::class,'delete']);