<?php

namespace App\Models;

class News extends CustomModel
{
    public $fillable = ['date', 'title', 'image', 'news', 'pinned'];

    protected $attributes = array(
        'pinned' => 0,
    );
}
