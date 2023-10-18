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
Route::get('/home', function(){
    return redirect('/');
});

Auth::routes();

Route::match(['get','post'], '/', [App\Http\Controllers\MainController::class, 'home'])->name('home');;
Route::get('/animal/{id}', [App\Http\Controllers\MainController::class, 'animal']);
Route::match(['get','post'], '/deleteanimal/{id}', [App\Http\Controllers\MainController::class, 'deleteanimal']);
Route::get('/info', [App\Http\Controllers\MainController::class, 'info'])->name('info');
Route::get('/rules', [App\Http\Controllers\MainController::class, 'rules'])->name('rules');
