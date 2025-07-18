<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('app.student', compact('students'));

    }
    public function show(Student $student)
    {

        return view('app.student.show-student', compact('student'));

    }
}
