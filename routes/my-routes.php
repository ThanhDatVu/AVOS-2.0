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
use App\Http\Controllers\QuestionController;

/* Tạo bài giảng mới */
Route::get('/make-new-lesson', [LessonController::class, "makeNewLesson"])->middleware(['auth'])->name('make-new-lesson');
//Lưu bài giảng
Route::post('/make-new-lesson', [LessonController::class, "submitlesson"])->middleware(['auth'])->name('submit-lesson');
//Xem bài giảng
Route::get('/courses/read/{id}', [LessonController::class, "showLesson"])->middleware(['auth'])->name('lesson');
//Tạo bài kiểm tra
Route::get('/make-new-exam', [ExamController::class, "makeNewExam"])->middleware(['auth'])->name('make-new-exam');
// Lưu bài kiểm tra
Route::post('/make-new-exam', [ExamController::class, "submitExam"])->middleware(['auth'])->name('submit-exam');
// làm bài kiểm tra
Route::get('/courses/exam/{id}', [ExamController::class, "showExam"])->middleware(['auth'])->name('exam');
//nộp bài kiểm tra
Route::post('/courses/exam/{id}', [ExamController::class, "submitTakenExam"])->middleware(['auth'])->name('submit-taken-exam');
//Xuất ra kết quả kiểm tra
Route::get('/courses/exam/{id}/result', [ExamController::class, "showResult"])->middleware(['auth'])->name('exam-result');
//Sửa bài kiểm tra
Route::get('/edit-exam/{id}', [ExamController::class, "editExam"])->middleware(['auth'])->name('edit-exam');
//lưu bài kiểm tra
Route::post('/edit-exam/{id}', [ExamController::class, "submitExam"])->middleware(['auth'])->name('submit-edited-exam');
//Tạo câu hỏi trong bài kiểm tra
Route::get('exam/{examid}/question/create', [QuestionController::class, "createExamQuestion"])->middleware(['auth'])->name('create-questions');
//Lưu câu hỏi trong bài kiểm tra
Route::post('exam/{examid}/question/create', [QuestionController::class, "submitExamQuestion"])->middleware(['auth'])->name('submit-create-questions');
//Sửa câu hỏi trong bài kiểm tra
Route::get('exam/{examid}/question/edit', [QuestionController::class, "editExamQuestion"])->middleware(['auth'])->name('edit-exam-questions');
//Lưu câu hỏi đã sửa trong bài kiểm tra
Route::post('exam/{examid}/question/edit', [QuestionController::class, "submitEditedExamQuestion"])->middleware(['auth'])->name('submit-edited-questions');
/*courses*/
Route::get('/make-new-course', [CourseController::class, "makeNewCourse"])->middleware(['auth'])->name('make-new-course');

Route::post('/make-new-course', [CourseController::class, "submitEditCourse"])->middleware(['auth'])->name('submit-course');
/*Sửa bài học */
Route::get('/edit-lesson/{id}', [LessonController::class, "editlesson"])->middleware(['auth'])->name('edit-lesson');

Route::post('/edit-lesson/{id}', [LessonController::class, "submitlesson"])->middleware(['auth'])->name('submit-edited-lesson');


Route::get('/courses/{id}', [CourseController::class, "showSingle"])->middleware(['auth'])->name('course');
Route::get('/courses/enroll/{id}', [CourseController::class, "enroll"])->middleware(['auth'])->name('enroll');
Route::get('/courses', [CourseController::class, "showAll"])->name('courses');
Route::get('/my-courses', [CourseController::class, "showmycourse"])
    ->name('my-courses');


Route::get('/admin-my-course', [CourseController::class, "adminmycourse"])->middleware(['auth'])->name('admin-course');

Route::get('/admin-my-course/{id}', [CourseController::class, "showSingle"])->middleware(['auth'])->name('admin-courses-detail');

/*courses*/
Route::get('/users', [UserController::class, "showUsers"])->middleware(['auth'])->name('users');
