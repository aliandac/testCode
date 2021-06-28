<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualFairCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_fair_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description',250);
            $table->string('keywords',500);
            $table->string('seo_url',255);
            $table->string('image',255)->nullable();
            $table->string('slider_title',300)->nullable();
            $table->string('slider_image',255)->nullable();
            $table->longText('slider_content')->nullable();
            $table->boolean('active')->nullable()->default(0);
            $table->integer('parent_id')->default('0');
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
        Schema::dropIfExists('virtual_fair_categories');
    }
}
