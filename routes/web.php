<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataHandleController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/data-handle/{id}/path',[DataHandleController::class, 'handlePathVariable']);
Route::get('/data-handle/query-string',[DataHandleController::class, 'handleQueryString']);
Route::get('/data-handle/form',[DataHandleController::class, 'handleForm']);
Route::post('/data-handle/form',[DataHandleController::class, 'processForm']);

Route::get('/layout',[AdminController::class, 'returnLayout']);
Route::get('/layout/form',[AdminController::class, 'returnForm']);

Route::post('/layout/form',[AdminController::class, 'storeEvent']);
Route::get('/layout/table',[AdminController::class, 'showAll']);

Route::get('/layout/update/{eventName}', [AdminController::class, 'edit']);
Route::post('/layout/update/{eventName}', [AdminController::class, 'update']);
Route::get('/layout/delete/{eventName}', [AdminController::class, 'delete']);
