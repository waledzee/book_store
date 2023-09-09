<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GalleryController;

use App\Models\Course;
use App\Models\Gallery;
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

// route for new name

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/handle-login',[AuthController::class,'handleLogin'])->name('handleLogin');


Route::get('/register', [AuthController::class ,'register'])->name('register');
Route::post('/handler-egister', [AuthController::class ,'handleRegister'])->name('handleRegister');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');




Route::get('/about', function () {
    return view('about');
})->name('about');

//route to show viewes
Route::get('teachers',[TeacherController::class,'show'])->name('teachers');
Route::get('gallery',[GalleryController::class,'show'])->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/createclass', [CourseController::class, 'show_add'])->name('addclass');


Route::get('/class', [CourseController::class,'classes'])->name('class');
Route::post('/s-course',[CourseController::class,'store'])->name('StoreCourse');


Route::get('/delete-form', [CourseController::class,'delete_form'])->name('delete_form');

Route::post('/delete-class', [CourseController::class,'delete_class'])->name('delete_class');

Route::get('/update-form', [CourseController::class,'update_form'])->name('update_form');

Route::post('/update-class', [CourseController::class,'update_class'])->name('update_class');






Route::prefix('/dashboard')->group(function () {
    Route::get('/index', function(){ return view('dashboard.index');})->name('dashboard');

    Route::get('/n-teacher', [TeacherController::class,'create'])->name('create.teacher');
    Route::post('/handle-teacher', [TeacherController::class,'store'])->name('store.teacher');

    Route::get('/d-teacher', [TeacherController::class,'delete'])->name('delete_teacher');

   Route::post('/handle-dteacher', [TeacherController::class,'handle_Tdelete'])->name('handleTdelete');

    Route::get('/n-img', [GalleryController::class,'create'])->name('create.gallery');
    Route::post('/handle-img', [GalleryController::class,'store'])->name('store.gallery');


    Route::get('/update-teacher', [TeacherController::class,'update'])->name('update_teacher');
    Route::post('/handeleupdate-teachers', [TeacherController::class,'handle_update'])->name('handle-tupdate');  


});






