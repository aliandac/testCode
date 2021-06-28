<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bid_id');
            $table->string('url');
            $table->string('name');
            $table->boolean('is_cover')->default(0);
            $table->boolean('active');
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
        Schema::dropIfExists('bid_images');
    }
}
