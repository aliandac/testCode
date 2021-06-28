<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_favorites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id')->comment('company id');
            $table->integer('favorite_id');
            $table->integer('favorite_category');
            $table->string('favorite_name');
            $table->string('favorite_img');
            $table->softDeletes();
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
        Schema::dropIfExists('company_favorites');
    }
}
