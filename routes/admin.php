<?php

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;

/* Lessons */
Route::get('/make-new-lesson', [LessonController::class, "makeNewLesson"])->middleware(['auth'])->name('edit-lesson');

Route::post('/make-new-lesson', [LessonController::class, "submitlesson"])->middleware(['auth'])->name('submit-lesson');

/* Edit courses*/

Route::get('/make-new-course', [CourseController::class, "editcourse"])->middleware(['auth'])->name('make-new-course');

Route::post('/make-new-course', [CourseController::class, "submitEditCourse"])->middleware(['auth'])->name('submit-course');

/* Admin courses*/
Route::get('/courses/{id}', [CourseController::class, "show"])->middleware(['auth'])->name('admin-course');
Route::get('/admin-my-course', [CourseController::class, "adminmycourse"])->middleware(['auth'])->name('admin-course');

Route::get('/admin-my-course/{id}', [CourseController::class, "showSingle"])->middleware(['auth'])->name('admin-courses-detail');
