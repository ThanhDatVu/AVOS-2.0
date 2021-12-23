<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lesson;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idCours',
        'title',
        'descriptif',
        "objectif",
        "competences_requises",
        "niveau_de_difficulte",
        "coût_du_cours",
        "image",
        "updated_at",
        "enseignant_id",
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
