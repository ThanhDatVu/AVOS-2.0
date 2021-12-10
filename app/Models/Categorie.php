<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{   protected $table = 'categories';
    use HasFactory;

    protected $fillable=[
        "nom",
    ];
}
