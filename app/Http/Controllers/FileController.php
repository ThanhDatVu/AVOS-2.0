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
    public function showSinglePDF(Request $request)
    {
        $id = $request->get("id");


        return response()->file(public_path($id));


    }
}
