<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->integer('price');
            $table->integer('pricenew');
            $table->string('img');
            $table->text('content');
            $table->integer('quantity');
            $table->foreignId('brandsid')->constrained('brands');
            $table->foreignId('vendorsid')->constrained('vendors');
            $table->foreignId('categoriesid')->constrained('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
