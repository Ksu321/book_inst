<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIllustratorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illustrator', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('biography');
            $table->string('genre');
            $table->string('publish_id')->nullable();
            $table->string('book_id')->nullable();
            $table->string('contact');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('illustrator');
    }
}
