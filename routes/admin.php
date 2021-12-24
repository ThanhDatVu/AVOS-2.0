<?php

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;

/* Lessons */
Route::get('/edit-lesson',[LessonController::class,"editlesson"])->middleware(['auth'])->name('edit-lesson');

Route::post('/edit-lesson', [LessonController::class,"submitlesson"])->middleware(['auth'])->name('edit-lesson');

/* Edit courses*/

Route::get('/edit-course', [CourseController::class,"editcourse"])->middleware(['auth'])->name('edit-course');

Route::post('/edit-course', [CourseController::class,"submitEditCourse"])->middleware(['auth'])->name('edit-course');

/* Admin courses*/
Route::get('/courses/{id}', [CourseController::class,"show"])->middleware(['auth'])->name('admin-course');
Route::get('/admin-my-course', [CourseController::class,"adminmycourse"])->middleware(['auth'])->name('admin-course');

Route::get('/admin-my-course/{id}', [CourseController::class,"showSingle"])->middleware(['auth'])->name('admin-courses-detail');
