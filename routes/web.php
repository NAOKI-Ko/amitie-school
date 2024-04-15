<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TaskController;

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
// ホームページ
Route::get('/home', [HomeController::class, 'index']);
// アバウトページ
Route::get('/about', [AboutController::class, 'index']);
Route::get('/test', 'App\Http\Controllers\TestController@index');
Route::resource('tasks', TaskController::class);