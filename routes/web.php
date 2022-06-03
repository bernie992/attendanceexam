<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Auth::routes();

//Get route
Route::get('/redirects', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'admin_dash']);
Route::get('dash_board', [UserController::class, 'employee_dash']);

Route::get('users', [UserController::class, 'viewrecord']);
Route::get('exam title', [UserController::class, 'view_title']);
Route::get('attendance', [UserController::class, 'attendance']);
Route::get('exam', [UserController::class, 'exam']);

Route::get('/view_question/{id}', [UserController::class, 'view_question']);

//time
Route::get('time In', [UserController::class, 'update']);
Route::get('time Out', [UserController::class, 'time_out']);
Route::get('examenier', [UserController::class, 'examier']);
//search
Route::get('search', [UserController::class, 'search']);

//Post Route
Route::post('/addemployee', [UserController::class, 'addemployee']);
Route::post('/create_exam', [UserController::class, 'create_exam']);
Route::post('/create_question', [UserController::class, 'create_question']);
Route::post('/create link', [UserController:: class, 'createlink']);
Route::post('/add application', [UserController::class, 'application']);

//////
Route::get('/landing', [UserController::class, 'landing']);



