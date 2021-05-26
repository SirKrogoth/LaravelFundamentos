<?php

use App\Http\Controllers\ClientController;
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
})->name('index');


Route::get('/client', [ClientController::class, 'index'])->name('clients.index');
Route::get('/client/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('/client/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::post('/client', [ClientController::class, 'store'])->name('clients.store');

Route::get('/client/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/client/{id}', [ClientController::class, 'update'])->name('clients.update');

Route::delete('/client/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

