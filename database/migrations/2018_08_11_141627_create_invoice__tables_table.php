<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice__tables', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('item');
            $table->float('Net_Total');
            $table->integer('Discount');
            $table->float('Total');
            $table->integer('Quntity');
            $table->float('Unit_Price');
            $table->float('Grand_Total');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice__tables');
    }
}
