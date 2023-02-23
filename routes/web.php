<?php

use Illuminate\Support\Facades\Route;

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


Route::get('admin', [App\Http\Controllers\HistoricalLogsController::class, 'admin']);
Route::get('getLogs', [App\Http\Controllers\HistoricalLogsController::class, 'getLogs']);
Route::post('peticion', [App\Http\Controllers\HistoricalLogsController::class, 'peticion']);
Route::post('retrieveToken', [App\Http\Controllers\HomeController::class, 'retrieveToken']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('user');
