<?php

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');//ДОМАШНЯЯ
Route::get('/dod/view', [App\Http\Controllers\IndexController::class, 'view_form_dod'])->name('view_form_dod');//ДОМАШНЯЯ
Route::get('/dod/edit', [App\Http\Controllers\IndexController::class, 'edit_question_dod'])->name('edit_question_dod');//ДОМАШНЯЯ
Route::get('/dod/answer', [App\Http\Controllers\IndexController::class, 'view_answer_dod'])->name('view_answer_dod');//ДОМАШНЯЯ
Route::get('/excursion/view', [App\Http\Controllers\IndexController::class, 'view_form_excursion'])->name('view_form_excursion');//ДОМАШНЯЯ
Route::get('/excursion/edit', [App\Http\Controllers\IndexController::class, 'edit_question_excursion'])->name('edit_question_excursion');//ДОМАШНЯЯ
Route::get('/excursion/answer', [App\Http\Controllers\IndexController::class, 'view_answer_excursion'])->name('view_answer_excursion');//ДОМАШНЯЯ

Route::get('add-to-log', [App\Http\Controllers\IndexController::class, 'myTestAddToLog'])->name('myTestAddToLog');
Route::get('logActivity', [App\Http\Controllers\IndexController::class, 'logActivity'])->name('logActivity');