<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultiesTable extends Migration
{
   
    public function up()
    {
     Schema::create('faculties', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('name');
            $table->timestamps();
        
        });
    }

    
    public function down()
    {
     Schema::dropIfExists('faculties');
    }   

}