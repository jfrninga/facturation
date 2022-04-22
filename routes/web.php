<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\UserController;
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


Route::get('/', [LoginController::class, 'index'])->name('index');


Route::get('/login', [LoginController::class, 'redirect'])->name('users.login');
Route::get('/callback', [LoginController::class, 'callback'])->name('users.register');
Route::post('/register', [LoginController::class, 'registration'])->name('users.registration');
Route::get('/logout', [LoginController::class, 'logout'])->name('users.logout');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard')->middleware('users');


Route::get('/account', [UserController::class, 'index'])->name('users.index');
Route::get('{user}', [UserController::class, 'edit'])->name('users.edit');
Route::put('edit/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('{user}', [UserController::class, 'destroy'])->name('users.destroy');


Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('create', [ClientController::class, 'create'])->name('clients.create');
Route::post('create', [ClientController::class, 'store'])->name('clients.store');
Route::get('{client}', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('edit/{client}', [ClientController::class, 'update'])->name('clients.update');
Route::get('{client}', [ClientController::class, 'show'])->name('clients.show');
Route::delete('{client}', [ClientController::class, 'destroy'])->name('clients.destroy');

Route::get('missions/create', [MissionController::class, 'create'])->name('missions.create');
Route::post('create', [MissionController::class, 'store'])->name('missions.store');
Route::get('edit', [MissionController::class, 'edit'])->name('missions.edit');
Route::put('{mission}/edit', [MissionController::class, 'update'])->name('missions.update');
Route::get('{mission}', [MissionController::class, 'show'])->name('missions.show');
Route::delete('{mission}', [MissionController::class, 'destroy'])->name('missions.destroy');
