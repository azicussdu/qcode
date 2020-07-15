<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'description', 'alias', 'with_mentor_cost', 'no_mentor_cost', 'lecture_lessons', 'practice_lessons'
    ];

    public function authors(){
        return $this->belongsToMany(Author::class);
    }

    public function topics(){
        return $this->hasMany(Topic::class);
    }

//    public function getRouteKeyName(){
//        return 'alias';
//    }
}
