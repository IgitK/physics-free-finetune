<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'name',
        'year',
        'day',
        'institute',
        'type',
        'medium',
        'start_time',
        'end_time'
    ];
}
