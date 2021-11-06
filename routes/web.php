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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
 
Route::get('/create', [App\Http\Controllers\ProjectController::class, 'create'])->name('project.create');
Route::get('/balance_create/{id}', [App\Http\Controllers\ProjectController::class, 'balance_create'])->name('balance_create');
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');
Route::get('/wallet', [App\Http\Controllers\WalletController::class, 'index'])->name('wallet');
Route::get('/balances/{id}', [App\Http\Controllers\ProjectController::class, 'balance_index'])->name('balance.index');

Route::get('/create_client', [App\Http\Controllers\UserController::class, 'create'])->name('client.create');
Route::get('/create_wallet', [App\Http\Controllers\WalletController::class, 'create'])->name('wallet.create');
Route::get('/withdraw_wallet', [App\Http\Controllers\WalletController::class, 'withdraw'])->name('wallet.withdraw');
Route::get('/upcoming_create', [App\Http\Controllers\UpcomingController::class, 'create'])->name('upcoming.create');
Route::get('/clients', [App\Http\Controllers\UserController::class, 'index'])->name('clients');

Route::post('/save_project', [App\Http\Controllers\ProjectController::class, 'save'])->name('project.save');
Route::post('/save_balance', [App\Http\Controllers\ProjectController::class, 'balance_save'])->name('balance.save');
Route::post('/save_client', [App\Http\Controllers\UserController::class, 'save'])->name('client.save');
Route::post('/save_wallet', [App\Http\Controllers\WalletController::class, 'save'])->name('wallet.save');
Route::post('/save_withdraw', [App\Http\Controllers\WalletController::class, 'save_withdraw'])->name('wallet.save_withdraw');
Route::post('/save_upcoming', [App\Http\Controllers\UpcomingController::class, 'save'])->name('upcoming.save');
Route::post('/save_up', [App\Http\Controllers\UpcomingController::class, 'save_up'])->name('upcoming.save_up');
Route::post('/delete', [App\Http\Controllers\UpcomingController::class, 'delete'])->name('upcoming.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
