<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->integer('category_id');
            $table->string('image');
            $table->longText('context')->comment('blog context text');
            $table->string('title');
            $table->string('url');
            $table->text('main');
            $table->string('seo_title');
            $table->string('seo_description');
            $table->string('seo_keyword');
            $table->boolean('active');
            $table->text('tags')->comment('blog tags');
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
        Schema::dropIfExists('blogs');
    }
}
