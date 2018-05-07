<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('slug');
            $table->string('publishings_name')->nullable();
            $table->string('authors_name')->nullable();
            $table->string('illustrators_name')->nullable();
            $table->string('interpreters_name')->nullable();
            $table->string('image')->nullable();
            $table->string('name_book')->nullable();
            $table->string('number_pages')->nullable();
            $table->integer('year_publish')->nullable();
            $table->date('date')->nullable();
            $table->string('genre_book')->nullable();
            $table->string('annotation')->nullable();
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
        Schema::dropIfExists('book_news');
    }
}
