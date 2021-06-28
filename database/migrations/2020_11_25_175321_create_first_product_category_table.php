<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstProductCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_product_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('down_slider')->nullable()->default(0);
            $table->string('image')->nullable();
            $table->tinyInteger('active')->default(0)->nullable();
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
        Schema::dropIfExists('first_product_category');
    }
}
