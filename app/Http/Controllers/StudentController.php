<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
       $students= Student::all();
        return view('students', compact('students'));
    }
    public function create()
    {
        return view('create.student');
    }

    public function store(Request $request )
    {


//        $this->validate($request,[
//            'room_number' => 'required|unique:rooms,room_number'
//        ]);

        Student::create($request->all());

        return redirect()->route('students.index');
    }
}
