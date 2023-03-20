<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCatImgToCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_second')->table('categories', function (Blueprint $table) {
            $table->string('CatImg',500)->after('cat_Desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_second')->table('categories', function (Blueprint $table) {
            $table->dropColumn('CatImg');
        });
    }
}
