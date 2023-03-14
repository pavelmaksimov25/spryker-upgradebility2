<?php

namespace App\Models;

class Message extends CustomModel
{
    //
    public $fillable = ['name', 'email', 'message'];

    protected $attributes = array(
        'read_status' => 0,
    );
}
