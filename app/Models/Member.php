<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $fillable = ['name', 'image', 'role_id', 'mail', 'contact', 'address', 'session', 'work'];
}
