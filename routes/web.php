<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\BuyCourseClientController;
use App\Http\Controllers\CoursesController;



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


Route::get('/', function () { return view('welcome'); });

Route::resource('/clients', ClientsController::class);

Route::resource('/courses', CoursesController::class);

Route::get('/clients/{id}/courses', [ BuyCourseClientController::class, 'index' ] );

Route::post('/clients/{id}/courses', [ BuyCourseClientController::class, 'store' ] );

