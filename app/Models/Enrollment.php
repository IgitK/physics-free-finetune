<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'classroom_id',
        'status'
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
