<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Show the form for creating a new exam.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSinglePDF()
    {

        $url=Storage::url('avatar/default.png');


        return Storage::download(public_path($url));



    }
}
