<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fair extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fair', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->integer('code')->unique();
            $table->integer('category_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('city');
            $table->integer('country');
            $table->text('content');
            $table->string('company', 200);
            $table->string('web_page');
            $table->string('email');
            $table->string('seo_description', 240);
            $table->text('seo_keywords');
            $table->string('image');
            $table->integer('sector_id');
            $table->boolean('active')->default(0);
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
        Schema::dropIfExists('fair');
    }
}
