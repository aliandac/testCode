<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_slides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',200);
            $table->string('image',200);
            $table->string('alt',200);
            $table->string('url',200);
            $table->string('field',200);
            $table->boolean('active')->nullable()->default(1);
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
        Schema::dropIfExists('header_slides');
    }
}
