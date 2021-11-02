<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\CorrectiveController;
use App\Http\Controllers\AccountController;

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
    return view('auths.login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'postLogin']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'postRegister']);
Route::get('/register', [RegisterController::class, 'createDepartment']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/corrective', [CorrectiveController::class, 'index'])->middleware('auth');

// Audit Report
Route::get('/audit', [AuditController::class, 'index_audit'])->middleware('auth');
Route::get('/delete_audit/{id}', [AuditController::class, 'delete_audit']);

// Account Management
Route::get('/account', [AccountController::class, 'index_account'])->middleware('auth');
Route::post('/insert_account', [AccountController::class, 'insert_account']);
Route::get('/edit_account/{id}', [AccountController::class, 'edit_account']);
Route::post('/edit_account_process', [AccountController::class, 'edit_account_proccess']);
Route::get('/delete_account/{id}', [AccountController::class, 'delete_account']);
