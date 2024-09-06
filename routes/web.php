<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Subset;

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

Route::get('/',[Homecontroller::class,  'home'])->name('home');



//login and Register

Route::group(['middleware' => 'guest'], function () {
    Route::get('/dashboard/reg', [RegisterController::class, 'reg'])->name('dashboard.reg');

    Route::post('/dashboard/register', [RegisterController::class, 'register'])->name('dashboard.register');

    Route::get('/dashboard/log', [LoginController::class, 'log'])->name('dashboard.log');
    Route::post('/dashboard/login', [LoginController::class, 'login'])->name('dashboard.login');
});

// Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/home/dashboard', [HomeController::class, 'index'])->name('dashboard');

          //students
          Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
          Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
          Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
          Route::post('/students/update/{id}', [StudentController::class,  'update'])->name('students.update');
          Route::get('/students', [StudentController::class, 'index'])->name('students');
          Route::get('/students/delete/{id}', [StudentController::class, 'destroy'])->name('students.delete');

           //Teacher
        Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
        Route::post('/teachers/store', [TeacherController::class, 'store'])->name('teachers.store');
        Route::get('/teachers/edit/{id}', [TeacherController::class, 'edit'])->name('teachers.edit');
        Route::post('/teachers/update/{id}', [TeacherController::class, 'update'])->name('teachers.update');
        Route::get('/teachers/delete/{id}', [TeacherController::class, 'destroy'])->name('teachers.delete');
        Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');


         //classes

        Route::get('/classes/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
        Route::get('/classes/delete/{id}', [ClassController::class,  'destroy'])->name('class.delete');

        // // Route::get('/classes/create',[ClassController::class,  'create'])->name('classes.create');
        // Route::post('/classes/store',[ClassController::class, 'store'])->name('classes.store');
        Route::get('/classes', [ClassController::class, 'index'])->name('classes');
        Route::get('/classes/teachers', [ClassController::class, 'index2'])->name('teachers.classes');
        Route::post('/classes/update/{id}', [ClassController::class, 'update'])->name('classes.update');


        //subjects

        Route::get('/subjects', [SubjectController::class,  'index'])->name('subjects');

        Route::get('/subjects/edit/{id}', [SubjectController::class,  'edit'])->name('subjects.edit');

        Route::post('/subjects/update/{id}', [SubjectController::class,  'update'])->name('subjects.update');

        Route::get('/subjects/delete/{id}', [SubjectController::class,  'destroy'])->name('subjects.delete');

    });




    Route::get('/dashboard/logout', [HomeController::class, 'logout'])->name('dashboard.logout');


    Route::group(['middleware' => ['student']], function () {



        //dashboard2
        Route::get('/dashboard/students', [StudentController::class, 'dashboard'])->name('dashboard.students');
        Route::get('/dashboard/students/update',[StudentController::class, 'student'])->name('dashboard.update.s');
        Route::post('/dashboard/students/update/{id}',[StudentController::class, 'studentupdate'])->name('dashboard.studentupdate');
        Route::get('/dashboard/students/edit/{id}',[StudentController::class,  'make'])->name('dashboard.edit.s');
    });


    Route::group(['middleware' => [ 'teacher']], function () {


        //dashboard3

        Route::get('/dashboard/teachers', [TeacherController::class, 'dashboard'])->name('dashboard.teachers');
        Route::get('/teachers/classes',[TeacherController::class,  'teach'])->name('teach.dashboard');
    });




});
