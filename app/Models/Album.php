<?php

namespace App\Models;

class Album extends CustomModel
{
    public $fillable = ['albumName'];

    protected $attributes = [
        'coverImage' => 'no-image-available.jpg',
    ];
}
