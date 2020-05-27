<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('product_id')->autoIncrement();
            $table->integer('category_product_id');
            $table->string('c_name');
            $table->integer('c_price');
            $table->string('c_img');
            $table->integer('c_pricenew');
            $table->text('c_content');
            $table->integer('c_hotnew');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
