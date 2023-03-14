<?php

namespace App\Models;

class Member extends CustomModel
{
    public $fillable = ['name', 'image', 'role_id', 'mail', 'contact', 'address', 'session', 'work'];
}
