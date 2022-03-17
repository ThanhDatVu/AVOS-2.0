<?php

namespace App\Http\Controllers;

use App\Models\Result;
use URL;
use Session;
use Exception;
use App\Models\Course;
use App\Models\CourseUserRequests;
use App\Models\Exam;

use App\Models\Category;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Submit an edited course to publish.
     *
     * @return \Illuminate\Http\Response
     */


    public function submitEditCourse(Request $request)
    {
        $request->validate([
            "titre" => "string",
            'descriptif' => "string|required",
            "objectif" => "string|required",
            "competences" => "required|string",
            "difficulte" => "integer|max:10",
            "cout" => "integer",
        ]);
        function courseimg(Request $request)
        {
            return $request->courseimg ? Storage::disk("public")->put("courses", $request->courseimg) : "courses/default" . mt_rand(0, 2) . ".png";
        }

        Course::create([
            'title' => $request->titre,
            'teacher_id' => Auth::user()->teacher->id,
            'descriptif' => $request->descriptif,
            'image' => courseimg($request),
            "objectif" => $request->objectif,
            "competences_requises" => $request->competences,
            "niveau_de_difficulte" => $request->difficulte,

            "created_at" => now(),
        ]);
        return view(
            "admin-courses",
            [
                "courses" => Course::where('teacher_id', Auth::user()->teacher->id)->get()
            ]);
    }

    /**
     * Show the form for creating a new course.
     *
     * @return \Illuminate\Http\Response
     */
    public function makeNewCourse()
    {
        if (isset(Auth::user()->teacher->id)) {
            return view("admin-make-course", ["categories" => Category::All()]);
        } else {
            return view("dashboard");
        }
    }


    /**
     * Show the form for showing a single course.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSingle($id)
    {

        $course = Course::where('id', $id)->firstOrFail();


        return view('admin-courses-detail', ["course" => $course]);
    }


    /**
     * Show the form for showing a single course.
     *
     * @return \Illuminate\Http\Response
     */
    public $idu;

    public function enroll($id, Request $request)
    {
        $this->idu = $id;
        $course = Course::where('id', $id)->firstOrFail();

        DB::table('course_user_requests')
            ->updateOrInsert(
                ['user_id' => Auth::user()->id,
                    'course_id' => $id]

            );






        return view('enroll-confirm', ["course" => $course]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function adminmycourse()

    {

        if (isset(Auth::user()->teacher->id)) {
            return view('admin-courses', ["courses" => Course::where('teacher_id', Auth::user()->teacher->id)->firstOrFail()->get()]);
        } else {
            return view("dashboard");
        }
        //
    }

    /**
     * Show the form for creating a new course.
     *
     * @return \Illuminate\Http\Response
     */
    public function showmycourse()
    {

        if (true) {
            $userId = Auth::user()->id;
            $courseIds1 = DB::table('course_user')->where('user_id', $userId)->pluck('course_id');
            $courseIds2 = DB::table('courses')->where('category', Auth::user()->class)->pluck('id');
            $courseIds = $courseIds1->merge($courseIds2);

            return view('my-courses', ["courses" => Course::whereIn('id', $courseIds)->get()]);
        } else {
            return view("dashboard");
        }
    }

    /**
     * Show the form for creating a new course.
     *
     * @return \Illuminate\Http\Response
     */
    public function showmydashboard()
    {

        if (true) {
            $userId = Auth::user()->id;
            $courseIds1 = DB::table('course_user')->where('user_id', $userId)->pluck('course_id');
            $courseIds2 = DB::table('courses')->where('category', Auth::user()->class)->pluck('id');
            $courseIds = $courseIds1->merge($courseIds2);

            return view('dashboard', ["courses" => Course::whereIn('id', $courseIds)->get(), "results" => Auth::user()->results] );
        } else {
            return view("dashboard");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Course $cour
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $courses = Course::query();

        if ($request->has('category')) {
            $courses->where('category', 'LIKE', '%' . $request->category . '%');
        }
        $courses->get();
        return view('admin-courses', ["courses" => $courses]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Course $cour
     * @return \Illuminate\Http\Response
     */
    public function showAll(Request $request)
    {

        $courses = Course::query();

        if ($request->has('category')) {
            $courses->where('category', 'LIKE', '%' . $request->category . '%');
        }
        $listCourse = $courses->get();

        return view('all-courses', ["courses" => $listCourse]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Course $cour
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $cour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Course $cour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $cour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Course $cour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $cour)
    {
        //
    }
}
