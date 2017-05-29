<?php

namespace App\Http\Controllers;
use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Models\Faculty;
use Validator;
use App\User;
class FacultyController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
       
        $faculties=Faculty::all();
        return view('Faculties.list')->with('faculties',$faculties);

    }

    public function create()
    {
        
        return view('Faculties.create');
    }

  
    public function store(Request $request)
    {

      $validator=validator::make($request->all(),[
            'name'=>'required|max:225',
        ]);
          if($validator->fails()){
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }

     $Faculty=new Faculty;
     $Faculty->id=Uuid::generate(4);
     $Faculty->name=$request->name;
     $Faculty->save();
   
     return redirect()->route('faculties.index');
   
    /* 


        if($validator->fails()){
            return redirect('posts/create')
            ->withErrors($validator)
            ->withInput();
        }*/
       /* */
     /* $fac=$request->all();
      $fac['id']=Uuid::generate(4);
  
     $post=Faculty::create($fac);
      dd($post);
      $post->save();

*/

/*     $Faculty=new Faculty;
     $Faculty->id=Uuid::generate(4);
     $Faculty->name=$request->name;
     $Faculty->save();
    */

    }

  
    public function show($id)
    {
         $faculty=Faculty::findOrfail($id);
         return view('Faculties.show')->with('Faculty',$faculty);
    }

   
    public function edit($id)
    {
       $faculty=Faculty::findOrfail($id);
       return view('Faculties.edit')->with('Faculty',$faculty);

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
    

    $faculty=Faculty::findOrfail($id);
    $faculty->fill($request->all());
    $faculty->save();

    return redirect()->route('faculties.show',$faculty->id);



    }


    public function destroy($id)
    {
        

    }
}
