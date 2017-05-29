<?php

namespace App\Models;

use Emadadly\LaravelUuid\Uuids;
use Illuminate\Database\Eloquent\Model;

class ProgramCourse extends Model
{
   
    use Uuids;
   
   
    protected $fillable = [
        'course_id', 'Program_id','type',
    ];

  


  public function programs()

  {
    return $this->haMany('App\Models\Program');
  }
   
   public function program()

   {
       return $this->belongsTo('App\Models\program');
   }

    public function course()

   {
       return $this->belongsTo('App\Models\Course');
   }

}
