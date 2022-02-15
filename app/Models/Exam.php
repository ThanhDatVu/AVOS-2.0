<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        "course_id",
        "description",
        "number_of_questions",
        "updated_at",
        "teacher_id",
    ];
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
