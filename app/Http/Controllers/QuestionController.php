<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\exam;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Session;

class QuestionController extends Controller
{

    /**
     * Show the form for creating a new exam.
     *
     * @return \Illuminate\Http\Response
     */
    public function submitExam(Request $request)
    {

        if (isset(Auth::user()->teacher->id)) {
            $request->validate([
                "title" => "required",
                "description" => "string",
                "courseid" => "integer",

            ]);

            exam::create([
                "title" => "$request->title",
                "description" => "$request->description",
                "course_id" => "$request->courseid",
                "number_of_questions" => "$request->number_of_questions"


            ]);;

            return redirect(route("course", $request->courseid));
        } else {
            return redirect(route("course", $request->courseid));
        }
    }

    /**
     * Show the form for creating a new exam.
     *
     * @return \Illuminate\Http\Response
     */
    public function createExamQuestion(Request $request, $examid)
    {
        $exam = Exam::find($examid);

        if (isset(Auth::user()->teacher->id)) {
            return view("create-exam-question", ["exam" => $exam]);
        } else {
            return redirect(route("courses"));
        }
    }

    /**
     * Show the form for creating a new exam.
     *
     * @return \Illuminate\Http\Response
     */
    public function editExamQuestion(Request $request, $examid)
    {
        $exam = Exam::find($examid);

        if (isset(Auth::user()->teacher->id)) {
            return view("edit-exam-question", ["exam" => $exam]);
        } else {
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
        $exam = Exam::where('id', "like", $id)->firstOrFail();
        return view('exam-detail', ["exam" => $exam]);
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
        $exam = Exam::where('id', "like", $id)->firstOrFail();
        return view('edit-exam', ["exam" => $exam]);
//
    }

    /**
     * Show the form for showing a exam.
     *
     * @return \Illuminate\Http\Response
     */
    public function submitEditedExamQuestion(Request $request, $id)
    {

        $exam = Exam::where('id', "like", $id)->with('questions')->firstOrFail();
        $questions = $request->question;
        $answerAs = $request->answerA;
        $answerBs = $request->answerB;
        $answerCs = $request->answerC;
        $answerDs = $request->answerD;
        $correctAnswers = $request->correctAnswer;

        $questionList = $exam->questions;


        for ($x = 0; $x <= $exam->number_of_questions - 1; $x++) {
            $question = $questionList[$x];
            $question->question = "$questions[$x]";
            $question->answerA = "$answerAs[$x]";
            $question->answerB = "$answerBs[$x]";
            $question->answerC = "$answerCs[$x]";
            $question->answerD = "$answerDs[$x]";
            $question->correctAnswer = "$correctAnswers[$x]";
            $question->save();

        }


        return redirect(route("exam", ["id" => $id]));
        // return view('exam-result',["exam"=>$exam,"answer"=>$answers,"mark"=>$mark]);

    }

    /**
     * Show the form for showing a exam.
     *
     * @return \Illuminate\Http\Response
     */
    public function submitExamQuestion(Request $request, $id)
    {

        $exam = Exam::where('id', "like", $id)->with('questions')->firstOrFail();
        $questions = $request->question;
        $answerAs = $request->answerA;
        $answerBs = $request->answerB;
        $answerCs = $request->answerC;
        $answerDs = $request->answerD;
        $correctAnswers = $request->correctAnswer;


        for ($x = 0; $x <= $exam->number_of_questions - 1; $x++) {

            $question = Question::create([
                "created_by" => Auth::user()->id,
                "exam_id" => "$id",
                "question" => "$questions[$x]",
                "answerA" => "$answerAs[$x]",
                "answerB" => "$answerBs[$x]",
                "answerC" => "$answerCs[$x]",
                "answerD" => "$answerDs[$x]",
                "correctAnswer" => "$correctAnswers[$x]"
            ]);

        }


        return redirect(route("exam", ["id" => $id]));
        // return view('exam-result',["exam"=>$exam,"answer"=>$answers,"mark"=>$mark]);

    }

    /**
     * Show the form for showing a exam.
     *
     * @return \Illuminate\Http\Response
     */
    public function showResult(Request $request)
    {
        $exam = $request->session()->get('exam');
        $answers = $request->session()->get('answers');
        $mark = $request->session()->get('mark');


        return view('exam-result', ["exam" => $exam, "answer" => $answers, "mark" => $mark]);

    }

}
