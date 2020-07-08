<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->enum('method', ['COD', 'QRPAY', 'ATM']);
            $table->enum('atm_type', ['cash', 'account', 'internet banking'])->nullable();
            $table->foreignId('atmsid')->nullable()->constrained('atms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('method');
            $table->dropColumn('atm_type');
            $table->dropColumn('atmsid');
        });
        Schema::enableForeignKeyConstraints();
    }
}
