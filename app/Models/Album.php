<?php

namespace App\Models;

class Album extends CustomModel
{
    public $fillable = ['albumName'];

    protected $attributes = array(
        'coverImage' => "no-image-available.jpg",
    );
}
