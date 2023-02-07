<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\Student\StudentAuthController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\AdminEnrollController;
use App\Http\Controllers\AdminStudentController;
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




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/training-category/{id}', [HomeController::class, 'categoryTraining'])->name('training.category');
Route::get('/all-training', [HomeController::class, 'allTraining'])->name('training.all');
Route::get('/training-detail/{id}', [HomeController::class, 'trainingDetail'])->name('training.detail');



Route::get('/training-enroll/{id}', [EnrollController::class, 'index'])->name('training.enroll');
Route::post('/training-new-enroll/{id}', [EnrollController::class, 'newEnroll'])->name('training.new-enroll');
Route::get('/training-complete-enroll/{id}', [EnrollController::class, 'completeEnroll'])->name('training.complete-enroll');



Route::post('/student-login', [StudentAuthController::class, 'login'])->name('student.login');
Route::post('/student-register', [StudentAuthController::class, 'register'])->name('student.register');


Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/login-registration', [HomeController::class, 'loginRegistration'])->name('login-registration');


Route::middleware(['teacher'])->group(function (){
    Route::get('/teacher/dashboard', [TeacherAuthController::class, 'dashboard'])->name('teacher.dashboard');
    Route::post('/teacher/logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');


    Route::get('/course/add', [CourseController::class, 'index'])->name('course.add');
    Route::post('/course/create', [CourseController::class, 'create'])->name('course.create');
    Route::get('/course/manage', [CourseController::class, 'manage'])->name('course.manage');
    Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');

});

Route::get('/teacher/login', [TeacherAuthController::class, 'index'])->name('teacher.login');
Route::post('/teacher/login', [TeacherAuthController::class, 'login'])->name('teacher.login');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/Add/teacher', [TeacherController::class, 'index'])->name('add.teacher');
    Route::post('/create/teacher', [TeacherController::class, 'create'])->name('create.teacher');
    Route::get('/manage/Teacher', [TeacherController::class, 'manage'])->name('manage.teacher');
    Route::get('/edit/Teacher/{id}', [TeacherController::class, 'edit'])->name('edit.teacher');
    Route::post('/update/Teacher/{id}', [TeacherController::class, 'update'])->name('update.teacher');
    Route::get('/delete/Teacher/{id}', [TeacherController::class, 'delete'])->name('delete.teacher');


    Route::get('/add/category', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/create/category', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/manage/category', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/edit/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/admin/manage-course', [AdminCourseController::class, 'index'])->name('admin.manage-course');
    Route::get('/admin/course-details/{id}', [AdminCourseController::class, 'detail'])->name('admin.course-details');
    Route::get('/admin/update-course-status/{id}', [AdminCourseController::class, 'updateStatus'])->name('admin.update-course-status');
    Route::post('/admin/update-course-offer/{id}', [AdminCourseController::class, 'updateCourseOffer'])->name('admin.update-course-offer');
    Route::get('/admin/update-course-offer-status/{id}', [AdminCourseController::class, 'updateOfferStatus'])->name('admin.course-offer-status');
    Route::get('/admin/course-delete/{id}', [AdminCourseController::class, 'delete'])->name('admin.course-delete');


    Route::get('/admin/manage-enroll', [AdminEnrollController::class, 'index'])->name('admin.manage-enroll');
    Route::get('/admin/enroll-detail/{id}', [AdminEnrollController::class, 'detail'])->name('admin.enroll-detail');
    Route::get('/admin/download-invoice/{id}', [AdminEnrollController::class, 'download'])->name('admin.download-invoice');


    Route::post('/admin/update-enroll-status/{id}', [AdminEnrollController::class, 'updateStatus'])->name('admin.update-enroll-status');
    Route::get('/admin/edit-enroll-status/{id}', [AdminEnrollController::class, 'editStatus'])->name('admin.edit-enroll-status');
    Route::get('/admin/delete-enroll/{id}', [AdminEnrollController::class, 'delete'])->name('admin.delete-enroll');


    Route::get('/admin/manage-student', [AdminStudentController::class, 'index'])->name('admin.manage-student');
    Route::get('/admin/student-detail/{id}', [AdminStudentController::class, 'detail'])->name('admin.student-detail');
    Route::get('/admin/student-status/{id}', [AdminStudentController::class, 'updateStatus'])->name('admin.student-status');


    Route::get('/admin/add-user', [UserController::class, 'index'])->name('admin.add-user');
    Route::post('/admin/create-user', [UserController::class, 'createUser'])->name('admin.create-user');

    Route::get('/admin/manage-user', [UserController::class, 'manage'])->name('admin.manage-user');
    Route::get('/admin/edit-user', [UserController::class, 'edit'])->name('admin.edit-user');
    Route::get('/admin/delete-user', [UserController::class, 'delete'])->name('admin.delete-user');


});
