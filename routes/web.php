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

// Route::resource('categories',CategoryController::class,['except' => ['show'] ]);
// Route::get('course',[CoursesController::class,'index'])->name('course');
// Route::get('course/create',[CoursesController::class,'create'])->name('course.create');

// Route::post('course',[CoursesController::class,'store']);

// Route::get('course/{id}/edit',[CoursesController::class,'edit']);

// Route::put('course/{id}',[CoursesController::class,'update']);

// Route::delete('course/{id}',[CoursesController::class,'destroy']);
     
// Route::get('course',[CoursesController::class,'course'])->name('course');



Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\CourseesController;
Route::resource('course', CourseesController::class, ['except' => ['show'] ]);

use App\Http\Controllers\ShakaController;
Route::resource('shaka', ShakaController::class, ['except' => ['show'] ]);

use App\Http\Controllers\StudentController;
Route::resource('student_info', StudentController::class);

