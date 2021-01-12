<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostJobController;


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

//end of user route;

Route::get('/company_create',[CompanyController::class,('create')])->name('companycreate.create');
Route::post('/company_create',[CompanyController::class,('store')])->name('companycreate.store');
Route::get('/company_profile/{id}',[CompanyController::class,('show')])->name('company_profile.show');
Route::get('/company_profile_edit/{id}',[CompanyController::class,('edit')])->name('company_profile.edit');
Route::put('/company_profile_edit/{id}',[CompanyController::class,('update')])->name('company_profile.update');

//end of company route;

Route::get('/post_job_create',[PostJobController::class,('create')])->name('post_jobcreate.create');
Route::post('/post_job_create',[PostJobController::class,('store')])->name('post_jobcreate.store');
Route::get('/post_job_profile/{post_job_id}',[PostJobController::class,('show')])->name('post_job_view.show');
Route::get('/post_job_view_edit/{post_job_id}',[PostJobController::class,('edit')])->name('post_job_view.edit');
Route::put('/post_job_view_edit/{post_job_id}',[PostJobController::class,('update')])->name('post_job_view.update');

//end of post_job route;