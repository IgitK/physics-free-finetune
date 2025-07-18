<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classrooms = Classroom::all();
        return view('app.classroom', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.classroom.create-classroom');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|digits:4|integer|min:2024',
            'day' => 'required|in:monday,tuesday,wednesday,thursday,friday,satureday,sunday',
            'institute' => '|string|max:255',
            'type' => 'required|in:online,physical',
            'medium' => 'required|in:sinhala,english',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);


        Classroom::create($data);

        return redirect()->route('classroom.index')->with('success', 'Classroom Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Classroom $classroom)
    {
        return view('app.classroom.show-classroom', compact('classroom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classroom $classroom)
    {
        return view('app.classroom.edit-classroom', compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classroom $classroom)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|digits:4|integer|min:2024',
            'day' => 'required|in:monday,tuesday,wednesday,thursday,friday,satureday,sunday',
            'institute' => '|string|max:255',
            'type' => 'required|in:online,physical',
            'medium' => 'required|in:sinhala,english',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $classroom->update($data);

        return redirect()->route('classroom.index')->with('success', 'Classroom Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classroom.index')->with('success', 'Classroom Deleted Successfully');
    }
}
