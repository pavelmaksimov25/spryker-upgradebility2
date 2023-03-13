<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $fillable = ['title', 'date', 'stime', 'etime', 'image', 'place', 'description', 'registration', 'ended', 'photos'];
    
    protected $attributes = array(
        'ended' => 0,
     );
}
