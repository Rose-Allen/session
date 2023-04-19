<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/session", [App\Http\Controllers\UserSessionController::class, 'getAllSession'])->name("allSession");
Route::post('/logout/all', [App\Http\Controllers\UserSessionController::class, 'logoutAll'])->name('logout.all');
Route::post('/logout/notOne', [App\Http\Controllers\UserSessionController::class, 'logoutAllNotOne'])->name('logoutAll.NotOne');

