<?php

namespace App\Http\Controllers;
use \App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('name', 'asc')->get();
        
        return $view = view('student/index', compact('students'));
      
       
    }

    public function show($student_slug)
    {
        $student = Student::where('slug', $student_slug)->first();

        if (!$student) {
            abort(404, 'Student not found');
        }

        $view = view('student/show');
        $view->student = $student;
        return $view;
    }

  
}

