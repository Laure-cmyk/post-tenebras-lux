<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'story_id',
        'title',
        'summary',
        'author_name',
    ];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
