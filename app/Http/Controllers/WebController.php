<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function classPage()
    {
        $classrooms = Classroom::all();
        return view('web.schedule', compact('classrooms'));
    }
}
