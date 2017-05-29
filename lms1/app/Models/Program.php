<?php

namespace App\Models;
use Emadadly\LaravelUuid\Uuids;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
   

   protected $with=['faculty'];
   
    protected $fillable = [
        'name','faculty_id','mandatory_credits','optional_credits',
    ];


    protected $casts=[
        'id'=>'string',
    	'name'=>'string',
    	'mandatory_credits'=>'integer',
    	'optional_credits'=>'integer',
    ];

    public function faculty()
     {
    	return $this->belongsTo('App\Models\faculty');
     }
  
    public function programCourses()
     {
    	return $this->hasMany('App\Models\ProgramCourse');
     }
  
}
