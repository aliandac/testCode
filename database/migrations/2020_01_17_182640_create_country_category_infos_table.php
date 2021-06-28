<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryCategoryInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_categories_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug',1000);
            $table->integer('parent_id');
            $table->string('description',200);
            $table->string('keywords',200);
            $table->string('image',200);
            $table->string('alt',200);
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
        Schema::dropIfExists('country_categories_info');
    }
}
