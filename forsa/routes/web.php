<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForsaController;


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

// view company

Route::get('/profilecompny',[ForsaController::class ,'profilecompny']);
Route::get('/edit_company',[ForsaController::class ,'edit_company']);
Route::get('/ShowSuper',[ForsaController::class ,'ShowSuper']);
Route::get('/show_student',[ForsaController::class ,'show_student']);
Route::get('/Requests',[ForsaController::class ,'Requests']);
Route::get('/archivescompany',[ForsaController::class ,'archivescompany']);
Route::get('/addsuper',[ForsaController::class ,'addsuper']);

// supervisor
Route::get('/supervisor-profile',[ForsaController::class ,'supervisor_profile']);
Route::get('/supervisor_edit',[ForsaController::class ,'supervisor_edit']);
Route::get('/supervisor_createTask',[ForsaController::class ,'supervisor_createTask']);
Route::get('/supervisor_task_detailes',[ForsaController::class ,'supervisor_task_detailes']);
Route::get('/supervisor_students',[ForsaController::class ,'supervisor_students']);
Route::get('/supervisor-tasks',[ForsaController::class ,'supervisor_tasks']);

// view admin
Route::get('/admin_home',[ForsaController::class ,'admin_home']);
Route::get('/companyAdmin',[ForsaController::class ,'companyAdmin']);
Route::get('/aplicantAdmin',[ForsaController::class ,'aplicantAdmin']);
Route::get('/specialtyAdmin',[ForsaController::class ,'specialtyAdmin']);
Route::get('/studentAdmin',[ForsaController::class ,'studentAdmin']);


// view student

Route::get('/Applystudent',[ForsaController::class ,'Applystudent']);
Route::get('/Studenthome',[ForsaController::class ,'Studenthome']);
Route::get('/profileStudent',[ForsaController::class ,'profileStudent']);
Route::get('/Student-edit',[ForsaController::class ,'Student_edit']);
Route::get('/Applyarchivestudent',[ForsaController::class ,'Applyarchivestudent']);
Route::get('/tasksarchivestudent',[ForsaController::class ,'tasksarchivestudent']);
Route::get('/tasksStudent',[ForsaController::class ,'tasksStudent']);

// view Forsa

Route::get('/index',[ForsaController::class ,'index']);
Route::get('/login',[ForsaController::class ,'login']);
Route::get('/register',[ForsaController::class ,'register']);


Route::get('/sv-login',[ForsaController::class ,'sv_login']);




