<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('arabic_title');
            $table->string('english_title');
            $table->string('arabic_short_note');
            $table->string('english_short_note');
            $table->string('arabic_full_note');
            $table->string('english_full_note');
            $table->integer('type');//0 for accountant services & 1 for electronic services
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
        Schema::dropIfExists('services');
    }
}
