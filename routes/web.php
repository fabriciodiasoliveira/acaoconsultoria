<?php

use App\Http\Controllers\RandomDataController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pessoas', [App\Http\Controllers\PessoaController::class, 'index'])->name('pessoas');
Route::get('/pessoas/create', [App\Http\Controllers\PessoaController::class, 'create'])->name('pessoas.create');
Route::post('/pessoas/', [App\Http\Controllers\PessoaController::class, 'store'])->name('pessoas.store');
Route::get('/pessoas/edit/{id}', [App\Http\Controllers\PessoaController::class, 'edit'])->name('pessoas.edit');
Route::put('/pessoas/{id}', [App\Http\Controllers\PessoaController::class, 'update'])->name('pessoas.update');
Route::delete('/pessoas/{id}', [App\Http\Controllers\PessoaController::class, 'destroy'])->name('pessoas.destroy');
