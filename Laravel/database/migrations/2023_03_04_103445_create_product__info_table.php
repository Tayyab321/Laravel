<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_second')->create('product_info', function (Blueprint $table) {
            $table->id('ProdInfo_Id');
            $table->unsignedBigInteger('ProductId');
            $table->unsignedBigInteger('Categoryid');
            $table->string('prod_desc',500);
            $table->foreign('ProductId')->references('Pid')->on('product');
            $table->foreign('Categoryid')->references('Cid')->on('categories');

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
        Schema::dropIfExists('product_info');
    }
}
