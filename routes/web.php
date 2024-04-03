<?php

use App\Http\Controllers\AssistenciaController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ClienteController;
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

Route::redirect('/', 'cliente');
Route::get('/cliente', [ClienteController::class, 'index']);
Route::get('/cliente/create', ClienteController::class . '@create')->name('cliente.create');
Route::get('/cliente/{cliente}/edit', ClienteController::class .'@edit')->name('cliente.edit');
Route::put('/cliente/{cliente}', ClienteController::class .'@update')->name('cliente.update');
Route::delete('/cliente/{cliente}', ClienteController::class .'@destroy')->name('cliente.destroy');
Route::post('/cliente', [ClienteController::class, 'save']);
Route::get('/assistencia', function () {
    return view('assistencia');
});
Route::get('/assistencia/create', AssistenciaController::class . "@create")->name("assistencia.create");
Route::post('/assistencia', [AssistenciaController::class, 'save']);
