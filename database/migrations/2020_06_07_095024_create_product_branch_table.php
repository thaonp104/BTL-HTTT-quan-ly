<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_branch', function (Blueprint $table) {
            $table->id('id');
            $table->integer('quantity');
            $table->foreignId('productsid')->constrained('products');
            $table->foreignId('branchesid')->constrained('branches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_branch');
    }
}
