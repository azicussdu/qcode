<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    protected $fillable = ['order', 'name', 'topic_id', 'body', 'open'];

    public function topic(){
        return $this->belongsTo(Topic::class);
    }
}
