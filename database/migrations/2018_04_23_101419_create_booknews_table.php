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
            $table->string('description');
            $table->string('slug');
            $table->string('image');
            $table->string('name_book')->nullable();
            $table->string('author_book')->nullable();
            $table->string('number_pages')->nullable();
            $table->integer('year_publish')->nullable();
            $table->date('date')->nullable();
            $table->string('genre_book')->nullable();
            $table->string('annotation');
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
