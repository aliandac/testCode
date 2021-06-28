<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_slider', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',200)->nullable();
            $table->longText('content')->nullable();
            $table->string('image',500);
            $table->string('alt',100);
            $table->integer('category');
            $table->integer('firstCategory');
            $table->string('button_text',200);
            $table->string('button_url',300);
            $table->boolean('active')->default(0);
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
        Schema::dropIfExists('product_slider');
    }
}
