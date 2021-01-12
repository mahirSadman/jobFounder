<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('index');
});
Route::get('/company', function () {
    return view('company_dashboard');
});
Route::get('/user_registration',[UserController::class,('create')])->name('userreg.create');
Route::post('/user_registration',[UserController::class,('store')])->name('userreg.store');
Route::get('/user_profile/{id}',[UserController::class,('show')])->name('user_profile.show');
Route::get('/user_profile_edit/{id}',[UserController::class,('edit')])->name('user_profile.edit');
Route::put('/user_profile_edit/{id}',[UserController::class,('update')])->name('user_profile.update');