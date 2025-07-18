<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('web.home');
})->name('home');

Route::get('/classes', [WebController::class, 'classPage'])->name('schedule');

Route::get('/contact-us', function () {
    return view('web.contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('web.about');
})->name('about');


Route::post('/enroll', [EnrollmentController::class, 'enroll'])->name('enroll');
Route::post('/send-contact-email', [EmailController::class, 'sendContactEmail'])->name('contact-email.post');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('auth')->group(function () {
    Route::get('my-profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// App Routes
Route::get('/dashboard', function () {
    return view('app.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/resources', [ResourceController::class, 'index'])->name('resources');
Route::post('/resources-post', [ResourceController::class, 'uploadResource'])->name('resource.post');
Route::delete('/resources-delete/{id}', [ResourceController::class, 'deleteResource'])->name('resource.destroy');


Route::middleware(['auth', 'admin'])->group(function () {
    // Classroom rouets
    Route::post('/classroom', [ClassroomController::class, 'store'])->name('classroom.post');
    Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom.index');
    Route::get('/classroom/create', [ClassroomController::class, 'create'])->name('classroom.create');
    Route::get('/classroom/{classroom}', [ClassroomController::class, 'show'])->name('classroom.show');
    Route::get('/classroom/{classroom}/edit', [ClassroomController::class, 'edit'])->name('classroom.edit');
    Route::put('/classroom/{classroom}', [ClassroomController::class, 'update'])->name('classroom.update');
    Route::delete('/classroom/{classroom}', [ClassroomController::class, 'destroy'])->name('classroom.destroy');

    // Enrollment Routes
    Route::get('/enrollments', [EnrollmentController::class, 'index'])->name('enrollments.index');
    Route::patch('/enrollments/{enrollment}/approve', [EnrollmentController::class, 'approve'])->name('enrollments.approve');
    Route::patch('/enrollments/{enrollment}/reject', [EnrollmentController::class, 'reject'])->name('enrollments.reject');

    // Student Routes
    Route::get('/students', [StudentController::class, 'index'])->name('student.index');
    Route::get('/students/{student}', [StudentController::class, 'show'])->name('student.show');
});


Route::get('/schedule', function () {
    return view('app.schedule');
});


require __DIR__ . '/auth.php';
