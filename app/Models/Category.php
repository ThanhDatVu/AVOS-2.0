<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use HasFactory,AsSource;

    protected $fillable=[
        "name",
    ];
}
