<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAtts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atts', function (Blueprint $table) {
            $table->increments('aid');
            $table->integer('uid');
            $table->integer('pid');
            $table->string('title');
            $table->string('realname');
            $table->tinyinteger('age');
            $table->enum('gender',['ካ','ঀ']);
            $table->tinyinteger('salary');
            $table->string('jobcity');
            $table->string('udesc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('atts');
    }
}
