<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',500);
            $table->string('slug',1000);
            $table->string('description',200);
            $table->string('keywords',200);
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('order');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_categories');
    }
}
