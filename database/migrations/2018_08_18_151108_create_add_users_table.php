<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('User_Name');
            $table->string('User_Designation');
            $table->string('Email');
            $table->string('Password');
            $table->string('Select_Type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_users');
    }
}
