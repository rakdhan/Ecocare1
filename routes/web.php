<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EcocareController;
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

Route::get('students', [StudentController::class, 'index']);
Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');

//ECOCARE JWDB
Route::get('ecocare', [EcocareController::class, 'index']);
Route::get('ecocare/list', [EcocareController::class, 'getApps'])->name('app_app.list');

