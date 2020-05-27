<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id('news_id')->autoIncrement();
            $table->string('category_news_id');
            $table->string('c_name');
            $table->string('c_content');
            $table->dateTime('c_date');
            $table->string('c_img');
            $table->integer('c_hotnews');
            $table->text('c_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
