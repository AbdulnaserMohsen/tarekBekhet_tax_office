<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('phone');
            $table->string('national_id')->nullable();
            $table->string('faculty');
            $table->string('department');
            $table->string('language');
            $table->integer('graduated_year');
            $table->string('grade');
            $table->bigInteger('course_id')->unsigned();
            
            $table->foreign('course_id')
                  ->references('id')->on('courses')
                  ->onDelete('cascade');
            
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
        Schema::dropIfExists('applicants');
    }
}
