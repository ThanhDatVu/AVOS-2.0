<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        Teacher::create([
            "profession" => $request->profession,
            "user_id" => Auth::user()->id,
        ]);
        $user = User::where("id", Auth::user()->id);
        $user->role = "teacher";
        $user->update(["role" => "teacher"]);


        $request->validate([
            "profession" => "string|required",
        ]);
        return view("profile");
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

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Teacher $enseignant
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $enseignant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Teacher $enseignant
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $enseignant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Teacher $enseignant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $enseignant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Teacher $enseignant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $enseignant)
    {
        //
    }
}
