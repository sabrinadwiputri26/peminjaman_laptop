<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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


// Route::get('/home',[ProjectController::class, 'index']); 
RouRoute::get('/',[ProjectController::class, 'index']); te::get('/login',[ProjectController::class, 'login'])->name('login');   
Route::get('/login/auth', [ProjectController::class, 'auth'])->name('login-auth');
Route::post('/login/auth', [ProjectController::class, 'auth'])->name('login-auth');
Route::get('/data',[ProjectController::class, 'data']); 
Route::get('/create',[ProjectController::class, 'create']); 
Route::post('/store',[ProjectController::class, 'store']);
Route::get('/done/{id}',[ProjectController::class, 'done']);
Route::get('/delete/{id}',[ProjectController::class, 'destroy'])->name('delete');