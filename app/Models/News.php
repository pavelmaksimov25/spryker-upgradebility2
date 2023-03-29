<?php

namespace App\Models;

class News extends CustomModel
{
    public $fillable = ['date', 'title', 'image', 'news', 'pinned'];

    protected $attributes = [
        'pinned' => 0,
    ];
}
