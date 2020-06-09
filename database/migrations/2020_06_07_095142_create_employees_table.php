<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id');
            $table->string('fullname');
            $table->string('address');
            $table->string('phone');
            $table->date('birthday');
            $table->enum('role',['seller','storemanager','seniormanager','admin']);
            $table->integer('salary');
            $table->foreignId('branchesid')->nullable()->constrained('branches');
            $table->foreignId('accountsid')->constrained('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
