<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students',function(Blueprint $table){
                $table->bigIncrements('ID');
                $table->string('Name');
                $table->string('Email');
                $table->string('Languages');
                $table->string('Gender');
                $table->string('Phone');
                $table->string('Description');
                $table->string('Country');
                $table->string('Image');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
