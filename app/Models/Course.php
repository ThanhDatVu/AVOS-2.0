<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lesson;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Screen\AsSource;

class Course extends Model
{
    use HasFactory,AsSource;
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'descriptif',
        "objectif",
        "competences_requises",
        "niveau_de_difficulte",

        "image",
        "updated_at",
        "teacher_id",
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }public function exams(){
        return $this->hasMany(Exam::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
