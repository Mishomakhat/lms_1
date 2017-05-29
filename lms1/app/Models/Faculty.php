<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Faculty extends Model
{
   
   
   
    protected $fillable = [
        'name', 
    ];

    protected $casts=[
        'name'=>'string',
        'id'=>'string'
    
    ];


  public function programs()
  {
    return $this->haMany('App\Models\Program');
  }
   
}
