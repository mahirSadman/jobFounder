<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostJobController;
use App\Http\Controllers\SearchBotController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MailController;
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
})->name('index');

//auth starts
Route::get('/login',[UserController::class,('login')])->name('auth.login');
Route::post('/check',[UserController::class,('check')])->name('auth.check');
Route::get('profile',[UserController::class,('profile')]);
Route::get('logout',[UserController::class,('logout')])->name('auth.logout');
//auth ends

Route::get('/user_dashboard', function () {
    return view('user_dashboard');
});
Route::get('/company', function () {
    return view('company_dashboard');
});
Route::get('/notifications',[UserController::class,('notifications')])->name('notifications');
Route::get('/communications',[UserController::class,('communications')])->name('communications');
Route::post('/communications_send',[UserController::class,('communications_send')])->name('communications.send');
Route::get('/jobs_discover',[UserController::class,('jobDiscover')])->name('jobs.discover');
Route::get('/jobs_applied',[SearchBotController::class,('jobsApplied')])->name('jobs.applied');

Route::get('/user_registration',[UserController::class,('create')])->name('userreg.create');
Route::post('/user_registration',[UserController::class,('store')])->name('userreg.store');
Route::get('/user_dashboard',[UserController::class,('dashboard')])->name('user_dashboard');



Route::get('/user_profile_edit',[UserController::class,('edit')])->name('user_profile.edit');
Route::put('/user_profile_edit',[UserController::class,('update')])->name('user_profile.update');

Route::get('/user_profile/{id}',[UserController::class,('show')])->name('user_profile.show');

//end of user route;

//company route;
Route::get('/company_my',[CompanyController::class,('allCompanies')])->name('company.my');
Route::get('/company_create',[CompanyController::class,('create')])->name('companycreate.create');
Route::post('/company_create',[CompanyController::class,('store')])->name('companycreate.store');
Route::get('/company_dashboard/{id}',[CompanyController::class,('dashboard')])->name('company_dashboard');
Route::get('/company_profile_edit/{id}',[CompanyController::class,('edit')])->name('company_profile.edit');
Route::put('/company_profile_edit/{id}',[CompanyController::class,('update')])->name('company_profile.update');
Route::get('/company_profile/{id}',[CompanyController::class,('show')])->name('company_profile.show');
//end of company route;

Route::get('/post_job_create/{company_id}',[PostJobController::class,('create')])->name('post_jobcreate.create');
Route::post('/post_job_create',[PostJobController::class,('store')])->name('post_jobcreate.store');
Route::get('/post_job_profile/{post_job_id}',[PostJobController::class,('show')])->name('post_job_view.show');
Route::get('/post_job_view_edit/{post_job_id}',[PostJobController::class,('edit')])->name('post_job_view.edit');
Route::put('/post_job_view_edit/{post_job_id}',[PostJobController::class,('update')])->name('post_job_view.update');

//end of post_job route;

Route::post('/jobs_search_results',[SearchBotController::class,('search')])->name('jobs.search');

Route::get('/apply_job/{id}',[SearchBotController::class,('applyJob')])->name('apply.job');
Route::post('/accept_candidate',[PostJobController::class,('candidate_accept')])->name('candidate.accept');
Route::post('/wait_candidate',[PostJobController::class,('candidate_wait')])->name('candidate.wait');

Route::post('/add_role',[RoleController::class,('add')])->name('role.add');

//mail
Route::get('/send_mail',[MailController::class,('sendMail')])->name('mail.send');
//mail

Route::get('/jobs_pinned', function(){
    return view('jobs_pinned');
})->name('jobs.apllied');


Route::get('/company_search', function(){
    return view('company_search');
})->name('company.search');
