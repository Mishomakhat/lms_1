<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use Validator;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

     public function index()
    {
        $Students=Student::all();
        return view('students.list')->with('Students',$Students);

    }

    
    public function create()
     {
     	 return view('Students.create');    	
     }

  
    public function store(Request $request)
    {


		 $validator=validator::make($request->all(),[
           'name'=>'required|max:225',
           'surname'=>'required|max:225',
           ]);
          if($validator->fails()){
            return back()
            ->withErrors($validator)
            ->withInput();
        }
       
        $student=$request->all();       
        $student=Student::create($student);
        $student->save();
         return redirect()->route('students.index');
    }

  
    public function show($id)
    {
         
         $program=Program::findOrfail($id);
         return view('Programs.show')->with('Program',$program);
    }

   
    public function edit($id)
    {
       $faculties=faculty::all();
       $program=Program::findOrfail($id);
       return view('Programs.edit')->with('Program',$program)->with('faculties',$faculties);

    }

   
    public function update(Request $request, $id)
    {
          
     $validator=validator::make($request->all(),[
            'name'=>'required|max:225',
        ]);
          if($validator->fails()){
            return redirect()
            ->back()
            ->withErrors($validator);
           }
    

    $program=Program::findOrfail($id);
    $program->fill($request->all());
    $program->save();

    return redirect()->route('programs.show',$program->id);


    }


    public function destroy($id)
    {
        

    }

    
}
