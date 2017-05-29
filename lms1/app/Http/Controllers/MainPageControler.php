<?php
namespace App\Http\Controllers;

class MainPageControler extends Controller
{

 public function __construct()
    {
        $this->middleware('auth');
    }
   public function index()
    {
    	
        return view('index');
        

    }

}