<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Screen\AsSource;

class Lesson extends Model
{
    use HasFactory, AsSource;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        "objectif",
        "contenu",
        "descriptif",
        "image",
        "course_id",
        "updated_at",
        "teacher_id",
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
