<?php

namespace App\Models;
use Emadadly\LaravelUuid\Uuids;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   
   
    use Uuids;
   
   
    protected $fillable = [
        'name','credits', 
    ];  

    protected $casts=[
    	'name'=>'string',
    	'credits'=>'integer',
    ];


      public function coursePrograms()
     {
    	return $this->hasMany('App\Models\programCourse');
     }
  
}
