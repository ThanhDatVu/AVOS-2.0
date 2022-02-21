<?php

namespace App\Models;

use App\Models\Course;
use App\Models\User;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;use Orchid\Screen\AsSource;

class Teacher extends Model
{
    use HasFactory,AsSource;

    protected $fillable=[
        "profession",
        "user_id",
        "updated_at"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function course(){
        return $this->hasMany(Course::class);
    }

    public function lesson(){
        return $this->hasMany(Lesson::class);
    }
}
