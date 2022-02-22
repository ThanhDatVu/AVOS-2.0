<?php

use App\Http\Controllers\FileController;

Route::get('/viewpdf', [FileController::class, "showSinglePDF"])->middleware(['auth'])->name('viewpdf');



