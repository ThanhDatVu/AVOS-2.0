<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\exam;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ExamController extends Controller
{

    /**
     * Show the form for creating a new exam.
     *
     * @return \Illuminate\Http\Response
     */
    public function submitExam(Request $request)
    {

        if(isset(Auth::user()->teacher->id)){
            $request->validate([
                "title"=>"required",
                "description"=>"string",
                "courseid"=>"integer",

            ]);

            exam::create([
                "title"=>"$request->title",
                "description"=>"$request->description",
                "course_id"=>"$request->courseid",
                "number_of_questions"=>"$request->number_of_questions"


            ]);;

            return view('dashboard');
        }else{
            return view("dashboard");
        }
    }

    /**
     * Show the form for creating a new exam.
     *
     * @return \Illuminate\Http\Response
     */
    public function makeNewExam(Request $request)
    {

        if(isset(Auth::user()->teacher->id)){
            return view("admin-make-exam",["cours"=>Course::where('teacher_id',Auth::user()->teacher->id)->get() ]);
        }else{
            return redirect(route("courses"));
        }
    }
    /**
     * Show the form for showing a exam.
     *
     * @return \Illuminate\Http\Response
     */
    public function showExam($id)
    {

//
        $exam=Exam::where('id',"like",$id)->firstOrFail();
        return view('exam-detail',["exam"=>$exam]);
//
    }
    /**
 * Show the form for showing a exam.
 *
 * @return \Illuminate\Http\Response
 */
    public function editExam($id)
    {

//
        $exam=Exam::where('id',"like",$id)->firstOrFail();
        return view('edit-exam',["exam"=>$exam]);
//
    }
    /**
 * Show the form for showing a exam.
 *
 * @return \Illuminate\Http\Response
 */
    public function submitTakenExam(Request $request, $id)
    {
        $exam=Exam::where('id',"like",$id)->firstOrFail();
        $answers = $request->answer;
        $questions = $exam->questions;

        $mark = 0;
        for($x = 0; $x <= 1; $x++){

            if(strcmp($questions[$x]->correctAnswer,$answers[$x])==0){
                 $mark += 1;


            }



        }

        $result = new Result();
        $result->user_id = Auth::user()->id;
        $result->exam_id = $id;
        $result->points = $mark;
        $result->save();
        //To do: tìm bản ghi cũ, so sánh điểm, update bản ghi mới
        dd($result);



        return view('edit-exam',["exam"=>$exam]);

    }

}
