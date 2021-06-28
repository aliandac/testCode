<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->integer('image')->comment('image name');
            $table->string('url');
            $table->decimal('image_size',10,2)->comment('image size');
            $table->integer('rank')->comment('specifies the sequence number shortly does sort');
            $table->boolean('active')->comment('indicates activity status');
            $table->boolean('is_cover')->default(0)->comment('indicates whether the photo is a cover');
            $table->text('description')->comment('description image about');
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
        Schema::dropIfExists('company_images');
    }
}
