<?php

namespace App\Models;

class Message extends CustomModel
{
    //
    public $fillable = ['name', 'email', 'message'];

    protected $attributes = [
        'read_status' => 0,
    ];
}
