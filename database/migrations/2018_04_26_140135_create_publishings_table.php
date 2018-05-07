<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('city')->nullable();
            $table->string('booksnews_name')->nullable();
            $table->string('authors_name')->nullable();
            $table->string('illustrators_name')->nullable();
            $table->string('interpreters_name')->nullable();
            $table->integer('specialization_id')->nullable();
            $table->string('ukrainian_prizes')->nullable();
            $table->string('international_prizes')->nullable();
            $table->string('address')->nullable();
            $table->string('address_url')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('year')->nullable();
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
        Schema::dropIfExists('publishings');
    }
}
