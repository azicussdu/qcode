<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name', 'description', 'alias', 'instagram_link','youtube_link','facebook_link','vkontakte_link'
    ];

    public function courses(){
        return $this->belongsToMany(Course::class);
    }
}
