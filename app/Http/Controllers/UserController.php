<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

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
}
