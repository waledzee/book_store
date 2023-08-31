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


Route::get('/createclass', function () {
    return view('classes.create');
})->name('form');


Route::get('/class', [CourseController::class,'classes'])->name('class');
Route::post('/s-course',[CourseController::class,'store'])->name('StoreCourse');





Route::prefix('/dashboard')->group(function () {
    Route::get('/index', function(){ return view('dashboard.index');})->name('dashboard');

    Route::get('/n-teacher', [TeacherController::class,'create'])->name('create.teacher');
    Route::post('/handle-teacher', [TeacherController::class,'store'])->name('store.teacher');

    Route::get('/n-img', [GalleryController::class,'create'])->name('create.gallery');
    Route::post('/handle-img', [GalleryController::class,'store'])->name('store.gallery');


});






