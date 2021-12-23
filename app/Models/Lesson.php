<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{   protected $table = 'leçons';
    use HasFactory;

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idLeçon',
        'title',
        "objectif",
        "contenu",
        "descriptif",
        "image",
        "cour_id",
        "updated_at",
        "enseignant_id",
    ];
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
