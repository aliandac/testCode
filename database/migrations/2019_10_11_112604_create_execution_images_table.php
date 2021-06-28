<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutionImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('execution_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('execution_id');
            $table->string('url')->comment('indicates image url');
            $table->string('name')->comment('indicates image name');
            $table->decimal('size', 10, 2)->comment('indicates image size');
            $table->integer('rank')->comment('specifies the sequence number');
            $table->boolean('is_cover')->default(0)->comment('indicates whether the cover return boolean');
            $table->boolean('active')->default(1)->comment('indicates activity status return boolean');
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
        Schema::dropIfExists('execution_images');
    }
}
