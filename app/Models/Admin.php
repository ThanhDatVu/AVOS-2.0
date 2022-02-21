<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;use Orchid\Screen\AsSource;

class Admin extends Model
{
    use HasFactory,AsSource;
    protected $fillable=[
        "2authpass",
        "user_id",
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
