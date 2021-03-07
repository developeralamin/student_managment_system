<?php

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


use App\Http\Controllers\CoursesController;
Route::get('course',[CoursesController::class,'index'])->name('course');
Route::get('course/create',[CoursesController::class,'create'])->name('course.create');

Route::post('course',[CoursesController::class,'store']);

Route::delete('course/{id}',[CoursesController::class,'destroy']);
     
// Route::get('course',[CoursesController::class,'course'])->name('course');






Route::get('branch', function() {
     return view('branch/branch');
});