<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('arabic_name');
            $table->string('english_name');
            $table->string('arabic_short_details');
            $table->string('english_short_details');
            $table->string('arabic_full_details');
            $table->string('english_full_details');
            $table->integer('price');
            $table->integer('type');//0 for exists course & 1 for archived course
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
        Schema::dropIfExists('courses');
    }
}
