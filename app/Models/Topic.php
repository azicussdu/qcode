<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['order', 'name', 'course_id'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function subtopics(){
        return $this->hasMany(Subtopic::class);
    }
}
