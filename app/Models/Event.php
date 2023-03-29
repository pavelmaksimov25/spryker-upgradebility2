<?php

namespace App\Models;

class Event extends CustomModel
{
    public $fillable = [
        'title',
        'date',
        'stime',
        'etime',
        'image',
        'place',
        'description',
        'registration',
        'ended',
        'photos',
    ];

    protected $attributes = [
        'ended' => 0,
    ];
}
