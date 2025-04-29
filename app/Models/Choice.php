<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = [
        'choice_id',
        'text',
    ];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
