<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Question extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'id',
        'created_by',
        'exam_id',
        "question",
        "answerA",
        "answerB",
        "answerC",
        "answerD",
        "correctAnswer",
        "hint",
        "mark",
        "explanation",
        "updated_at",
        "teacher_id",
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class);
    }


}
