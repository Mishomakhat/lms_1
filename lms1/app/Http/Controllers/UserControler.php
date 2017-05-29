<?php
namespace App\Http\Controllers;
use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;
use App\user;
use App\Models\faculty;
use Validator;

class UserControler extends Controller
{
     public function __construct()
    {
        $this->middleware('admin');
    }



   public function index()
    {
    
        $Users=User::all();
        
        return view('Users.index')->with('users',$Users);

    }


   public function create()
    {
        
        
    }

  
    public function store(Request $request)
    {

     

    }

   public function show($id)
    {

         $user=User::findOrfail($id);
         return view('users.show')->with('user',$user);
    }


	public function edit($id)
    {
       $user=User::findOrfail($id);
       return view('users.edit')->with('user',$user);

    }


   public function update(Request $request, $id)
    {
          
        $user=user::findOrfail($id);
        if($user->is_admin=='false'){
    	$user->where('id', $id)->update(array('is_admin' => 'true'));
        }else{
        $user->where('id', $id)->update(array('is_admin' => 'false'));
        }   

      $user->save();  
      return redirect()->route('users.show',$user->id);

        


    }


}