<?php

use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/record/export', [RecordController::class, 'export'])->name('export_record');

Route::get('/profile', [UserController::class, 'profile'])->name('profile');


Route::get('/manage/users', [UserController::class, 'index'])->name('manage_users');

Route::post('/user/create', [UserController::class, 'store'])->name('create_user');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
