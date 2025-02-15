<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Screen\AsSource;


class CourseUser extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        "user_id",
        "cour_id",

    ];


    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }
}
