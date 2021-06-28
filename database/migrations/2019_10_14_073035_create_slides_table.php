<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',500);
            $table->text('content',2000);
            $table->string('image',200);
            $table->string('alt',200);
            $table->string('button_text',200);
            $table->string('button_url',255);
            $table->boolean('active')->default(0);
            $table->integer('order');
            $table->integer('category')->default(0)->nullable();
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
        Schema::dropIfExists('slides');
    }
}
