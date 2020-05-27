<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('contact_id')->autoIncrement();
            $table->string('c_name');
            $table->string('c_adress');
            $table->string('c_email');
            $table->integer('c_phone');
            $table->string('c_title');
            $table->string('c_content');
            $table->dateTime('c_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
