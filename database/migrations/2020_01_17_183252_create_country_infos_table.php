<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('country_category_info_id');
            $table->longText('content');
            $table->string('description',200);
            $table->string('keywords',200);
            $table->string('image',200);
            $table->string('alt',200);
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
        Schema::dropIfExists('country_info');
    }
}
