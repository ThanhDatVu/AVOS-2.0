<?php

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExamController;

/* Lessons */
Route::get('/make-new-lesson',[LessonController::class,"makeNewLesson"])->middleware(['auth'])->name('make-new-lesson');

Route::post('/make-new-lesson', [LessonController::class,"submitlesson"])->middleware(['auth'])->name('submit-lesson');

Route::get('/courses/read/{id}', [LessonController::class,"showLesson"])->middleware(['auth'])->name('lesson');
/* Exams */
Route::get('/make-new-exam',[ExamController::class,"makeNewExam"])->middleware(['auth'])->name('make-new-exam');

Route::post('/make-new-exam/create', [ExamController::class,"submitExam"])->middleware(['auth'])->name('submit-exam');
/* Làm Exams */
Route::get('/courses/exam/{id}', [ExamController::class,"showExam"])->middleware(['auth'])->name('exam');

Route::post('/courses/exam/{id}', [ExamController::class,"submitTakenExam"])->middleware(['auth'])->name('submit-taken-exam');

Route::get('/edit-exam/{id}',[ExamController::class,"editExam"])->middleware(['auth'])->name('edit-exam');

Route::post('/edit-exam/{id}', [ExamController::class,"submitExam"])->middleware(['auth'])->name('submit-edited-exam');
/*courses*/
Route::get('/make-new-course', [CourseController::class,"makeNewCourse"])->middleware(['auth'])->name('make-new-course');

Route::post('/make-new-course', [CourseController::class,"submitEditCourse"])->middleware(['auth'])->name('submit-course');
/*Sửa bài học */
Route::get('/edit-lesson/{id}',[LessonController::class,"editlesson"])->middleware(['auth'])->name('edit-lesson');

Route::post('/edit-lesson/{id}', [LessonController::class,"submitlesson"])->middleware(['auth'])->name('submit-edited-lesson');


Route::get('/courses/{id}', [CourseController::class,"showSingle"])->middleware(['auth'])->name('course');
Route::get('/courses/enroll/{id}', [CourseController::class,"enroll"])->middleware(['auth'])->name('enroll');
Route::get('/courses', function () {
    return view('all-courses',["courses"=>Course::all()]);
})->name('courses');
Route::get('/my-courses',  [CourseController::class,"showmycourse"])
->name('my-courses');


Route::get('/admin-my-course', [CourseController::class,"adminmycourse"])->middleware(['auth'])->name('admin-course');

Route::get('/admin-my-course/{id}', [CourseController::class,"showSingle"])->middleware(['auth'])->name('admin-courses-detail');

/*courses*/
Route::get('/users', [UserController::class,"showUsers"])->middleware(['auth'])->name('users');
