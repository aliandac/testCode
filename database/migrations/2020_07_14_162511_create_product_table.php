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
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',500);
            $table->longText('content');
            $table->double('price',10,2);
            $table->integer('company');
            $table->integer('category');
            $table->text('tags')->nullable();
            $table->integer('home_type')->nullable()->default(0);
            $table->string('product_url',1000);
            $table->boolean('active')->default(0)->nullable();
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
