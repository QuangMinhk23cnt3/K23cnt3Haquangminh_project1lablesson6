<?php

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

Route::get('/', function () {
    return view('welcome');
});
//#session
Route::get('/Hqm-session/get',[HqmSessionController::class,'HqmGetSessionData'])->name('hqmsession.get');
Route::get('/Hqm-session/set',[HqmSessionController::class,'HqmStoreSessionData'])->name('hqmsession.set');
Route::get('/Hqm-session/delete',[HqmSessionController::class,'HqmDeleteSessionData'])->name('hqmsession.delete');

//#account
Route::get('/hqm-login',[HqmAccountController::class,'hqmLogin'])->name('hqmaccount.hqmlogin');
Route::get('/hqm-logout',[HqmAccountController::class,'hqmLogout'])->name('hqmaccount.hqmLogout');
Route::post('/hqm-login',[HqmAccountController::class,'hqmLoginSubmit'])->name('hqmaccount.hqmloginsubmit');


