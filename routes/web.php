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



Route::get('/',[App\Http\Controllers\FormSubmitController::class, 'index'])->name('home');
Route::get('/formField',[App\Http\Controllers\FormSubmitController::class, 'formField'])->name('formField');
Route::post('/formSubmit',[App\Http\Controllers\FormSubmitController::class, 'store']);

