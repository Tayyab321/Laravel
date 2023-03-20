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
        Schema::connection('mysql_second')->create('product', function (Blueprint $table) {
            $table->id('Pid');
            $table->string('prod_Name',30);
            $table->unsignedBigInteger('CatId');
            $table->decimal('prod_Price');
            $table->string('prod_Image',500);
            $table->foreign('CatId')->references('Cid')->on('categories');

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
        Schema::dropIfExists('product');
    }
}
