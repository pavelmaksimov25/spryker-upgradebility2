<?php

namespace App\Models;

class Gallery extends CustomModel
{
    public $fillable = ['albumId', 'image', 'caption'];
}
