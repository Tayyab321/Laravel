<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_second')->create('user_reg', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('F_Name',225);
            $table->string('L_Name',225);
            $table->string('Email',225);
            $table->string('Password',225);
            $table->string('C_Password',225);
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
        Schema::dropIfExists('user_reg');
    }
}
