<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LessonController extends Controller
{

    /**
     * Show the form for creating a new lesson.
     *
     * @return \Illuminate\Http\Response
     */
    public function submitlesson(Request $request)
    {

        if (isset(Auth::user()->teacher->id)) {
            $request->validate([
                "titre" => "required",
                "descriptif" => "string",
                "courseid" => "integer",
                "editorvalue" => "required",
            ]);
            function lessonimg($request)
            {
                return $request->lessonimg ? Storage::disk("public")->put("lessons", $request->lessonimg) : "lessons/default" . mt_rand(0, 2) . ".png";
            }

            Lesson::create([
                "title" => "$request->titre",
                "descriptif" => "$request->descriptif",
                "course_id" => "$request->courseid",
                "objectif" => "$request->objectif",
                "image" => lessonimg($request),
                "contenu" => new HtmlString($request->editorvalue),
            ]);;

            return view('dashboard');
        } else {
            return view("dashboard");
        }
    }

    /**
     * Show the form for creating a new lesson.
     *
     * @return \Illuminate\Http\Response
     */
    public function makeNewLesson(Request $request)
    {

        if (isset(Auth::user()->teacher->id)) {
            return view("admin-make-lesson", ["cours" => Course::where('teacher_id', Auth::user()->teacher->id)->get()]);
        } else {
            return redirect(route("courses"));
        }
    }

    /**
     * Show the form for showing a lesson.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLesson($id)
    {

//
        $lesson = Lesson::where('id', "like", $id)->firstOrFail();
        return view('lesson-detail', ["lesson" => $lesson]);
//
    }

    /**
     * Show the form for showing a lesson.
     *
     * @return \Illuminate\Http\Response
     */
    public function editlesson($id)
    {

//
        $lesson = Lesson::where('id', "like", $id)->firstOrFail();
        return view('edit-lesson', ["lesson" => $lesson]);
//
    }

}
