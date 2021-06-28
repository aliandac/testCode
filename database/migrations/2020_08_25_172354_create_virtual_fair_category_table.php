<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualFairCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_fair_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('virtual_fair');
            $table->integer('category');
            $table->integer('company');
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
        Schema::dropIfExists('virtual_fair_category');
    }
}
