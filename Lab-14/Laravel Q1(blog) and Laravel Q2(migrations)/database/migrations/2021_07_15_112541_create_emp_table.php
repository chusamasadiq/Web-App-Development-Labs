<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp', function (Blueprint $table) {
            $table->increments('Employee_id');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->date('Hire_Date');
            $table->string('Manager');
            $table->integer('Department_ID') ->unsigned();
            $table->foreign('Department_ID') ->references('Department_ID')->on('dept');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp');
    }
}
