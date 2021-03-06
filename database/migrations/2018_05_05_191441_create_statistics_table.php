<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('front_image')->nullable();
            $table->string('image')->nullable();
            $table->string('content')->nullable();
            $table->string('file')->nullable();
            $table->date('date')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('statistics');
    }
}
