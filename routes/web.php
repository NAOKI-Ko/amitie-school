<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TodolistFormController;

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

// 一蘭
Route::get('/', [TodolistFormController::class, 'index']);
// 作成ページ
Route::get('/create-page', [TodolistFormController::class, 'createPage']);
// とうろく
Route::post('/create', [TodolistFormController::class, 'create']);
// とうろく
Route::get('/edit-page/{id}', [TodolistFormController::class, 'editPage']);
// とうろく
Route::post('/edit', [TodolistFormController::class, 'edit']);

Route::get('/delete-page/{id}', [TodolistFormController::class, 'deletePage']);
Route::post('/delete/{id}', [TodolistFormController::class, 'delete']);