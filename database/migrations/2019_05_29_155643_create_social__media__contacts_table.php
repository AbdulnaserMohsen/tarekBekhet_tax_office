<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialMediaContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social__media__contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('link');
            $table->integer('type');//1 for facebook & 2 for twitter & 3 for instegram & 4 for linkedin
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
        Schema::dropIfExists('social__media__contacts');
    }
}
