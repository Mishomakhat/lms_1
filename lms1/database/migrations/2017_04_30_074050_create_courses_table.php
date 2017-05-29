<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
   

    public function up()
    {
     Schema::create('courses', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('name');
            $table->integer('credites');
            $table->timestamps();
        
        }); 
    }


    public function down()
    {
     Schema::dropIfExists('courses');
    }
}
