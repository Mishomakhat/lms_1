<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use Validator;

class StudentController extends Controller
{
    
    public function index()
    {
        dd('machi');
      /*  $Students=Student::all();
        return view('students.list')->with('students',$students);*/
    }

    
}
