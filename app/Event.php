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
        'user_id', 'title', 'slogam', 'general_theme', 'description', 'period', 'place', 'department', 'organiser', 'image', 'price',
    ];

}

