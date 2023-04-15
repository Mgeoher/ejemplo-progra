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

Route::get('/', function () {
    return view('home');
});
Route::get('/',[\App\Http\Controllers\CatedraticoController::class,'index'])->name('Catedratico.index');
Route::get('/create',[\App\Http\Controllers\CatedraticoController::class,'create'])->name('Catedratico.create');
Route::post('/store',[\App\Http\Controllers\CatedraticoController::class,'store'])->name('Catedratico.store');
Route::get('/edit/{id}',[\App\Http\Controllers\CatedraticoController::class,'edit'])->name('Catedratico.edit');
Route::put('/uptdate/{id}',[\App\Http\Controllers\CatedraticoController::class,'update'])->name('Catedratico.update');
Route::get('/show/{id}',[\App\Http\Controllers\CatedraticoController::class,'show'])->name('Catedratico.show');
Route::delete('/destroy/{id}',[\App\Http\Controllers\CatedraticoController::class,'destroy'])->name('Catedratico.destroy');
