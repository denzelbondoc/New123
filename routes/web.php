<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;


Route::get('/', [CustomerController::class, 'index'])->middleware('auth');

Route::get('/register', [UserController::class, 'register']);

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login/process', [UserController::class, 'process']);
Route::post('/store', [UserController::class, 'store']);

Route::get('delete/{id}', [CustomerController::class, 'delete'])->middleware('auth');

Route::get('edit/{id}', [CustomerController::class, 'edit'])->middleware('auth');
Route::post('updateCustomer', [CustomerController::class, 'updateCustomer'])->middleware('auth');

Route::get('/addCustomer',[CustomerController::class, 'addCustomer']);
Route::post('/saveCustomer',[CustomerController::class, 'saveCustomer']);

Route::get('/logout', [UserController::class, 'logout']);