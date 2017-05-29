<?php

namespace App\Http\Controllers;
use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\faculty;
use Validator;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
     public function index()
    {
      /*  $programs=Program::with('faculty')->get();*/
        $programs=Program::all();
        return view('programs.list')->with('programs',$programs);

    }

    

   public function create()
    {
    	$faculties=faculty::all();
        return view('Programs.create')->with('faculties',$faculties);     	
    }

  
    public function store(Request $request)
    {

		 $validator=validator::make($request->all(),[
           'name'=>'required|max:225',
      /*    'faculty_id'=>'required',*/
       
        ]);
          if($validator->fails()){
            return back()
            ->withErrors($validator)
            ->withInput();
        }
     $Program=new Program;
     $Program->id=Uuid::generate(4);
     $Program->name=$request->name;
     $Program->faculty_id=$request->faculti_id;
     $Program->mandatory_credits=$request->mandatory_credits;
     $Program->optional_credits=$request->optional_credits;
     $Program->save();
     return redirect()->route('programs.index');

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
