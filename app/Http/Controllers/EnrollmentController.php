<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classroom;
use App\Models\Enrollment;
use Hash;
use Illuminate\Http\Request;
use App\Mail\ClassJoinRequestMail;
use Illuminate\Support\Facades\Mail;

class EnrollmentController extends Controller
{
    public function enroll(Request $request)
    {
        $data = $request->validate(
            [
                'fullname' => 'required|string',
                'phone' => 'required|string|regex:/^[0-9]{10}$/|unique:enrollments,phone',
                'email' => 'required|email|unique:enrollments,email',
                'class_id' => 'required|string',
                'notes' => 'string|nullable',
            ]
        );

        $classroom = Classroom::findOrFail((int) $request->class_id);
        $data['classroom'] = $classroom;


        Enrollment::create([
            'full_name' => $data['fullname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'classroom_id' => $classroom->id
        ]);

        Mail::to('your@email.com')->send(new ClassJoinRequestMail($data));
        return redirect()->back()->with(session('success', 'Email sent successfully'));
    }

    public function index(Request $request)
    {
        $query = Enrollment::query();

        if ($request->has('status') && $request->status !== null) {
            $query->where('status', $request->status);
        }

        $enrollments = $query->latest()->paginate(15);

        return view('app.enrollment', compact('enrollments'));
    }

    public function approve(Enrollment $enrollment)
    {

        $enrollment->update(['status' => 1]);

        $userexists = User::where('email', $enrollment->email)->exists();

        if (!$userexists) {
            User::create([
                'name' => $enrollment->full_name,
                'email' => $enrollment->email,
                'password' => Hash::make("password") // change this to a secure password
            ]);
        }

        return redirect()->back()->with('success', 'Enrollment approved successfully!');
    }

    public function reject(Enrollment $enrollment)
    {
        $enrollment->update(['status' => 2]);

        $user = User::where('email', $enrollment->email);

        if ($user) {
            $user->delete();
        }


        return redirect()->back()->with('success', 'Enrollment rejected successfully!');
    }
}
