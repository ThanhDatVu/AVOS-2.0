<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers($type = 'all')
    {
        if ($type == 'all') {
            $users = User::All();
        } elseif ($type == "teacher") {
            $users = Teacher::All();
        } else {
            $users = Admin::All();
        }
        $user_array = array();
        $i = 0;
        foreach ($users as $user) {
            $user_array[$i] = array(
                "name" => $user->nom_utilisateur,
                "pseudonym" => $user->pseudo,
                "email" => $user->email,
                "country" => $user->pays,
                "registered at" => $user->created_at->format("d-m-Y"),
            );
            $i++;
        }
        //header("content-type:application/json");
        //print_r(json_decode(json_encode($user_array),true));
        return view('users', ["users" => $users]);
    }
    public function showCourseUsers($courseid)
    {
        $course = Course::find($courseid);


        $userIds1 = DB::table('course_user')->where('course_id', $courseid)->pluck('user_id');
        $userIds2 = DB::table('users')->where('class', $course->category)->pluck('id');
        $userIds = $userIds1->merge($userIds2);
        $user = User::query()->whereIn('id',$userIds)->get();



        $userAllIds = User::all()->pluck('id');


        $userReverseIds = $userAllIds->diff($userIds);

        $userReverses = User::query()->whereIn('id',$userReverseIds)->get();

        return view('users', ["users" =>  $user, "userReverses" =>  $userReverses ]);
    }
    public function showCourseUserResults($courseid)
    {
        $course = Course::find($courseid);
        $exam = $course->exams;



        $userIds1 = DB::table('course_user')->where('course_id', $courseid)->pluck('user_id');
        $userIds2 = DB::table('users')->where('class', $course->category)->pluck('id');
        $userIds = $userIds1->merge($userIds2);
        $user = User::query()->whereIn('id',$userIds)->with('results')->get();


        return view('course-user-result', ["users" =>  $user, "exams" =>  $exam ]);
    }

    public function submitCourseUsers(Request $request, $courseid)
    {

        $userIds = $request->userId;




        foreach ($userIds as $userId) {
            DB::table('course_user')
                ->updateOrInsert(
                    ['user_id' => $userId,
                        'course_id' => $courseid]

                );
        }


        return redirect(route("course-users", ['courseid' => $courseid]));

    }


}
