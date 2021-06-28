<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('site_id');
            $table->string('title');
            $table->longText('content');
            $table->double('price',8,2);
            $table->integer('discount')->nullable();
            $table->boolean('active')->default(0)->nullable();
            $table->integer('company');
            $table->string('link');
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
        Schema::dropIfExists('food_menu');
    }
}
