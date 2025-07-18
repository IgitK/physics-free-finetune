<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'st_id',
        'user_id',
        'name',
        'email',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
