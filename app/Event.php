<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slogam', 'general_theme', 'description', 'period', 'place', 'organiser', 'image',
    ];

}

