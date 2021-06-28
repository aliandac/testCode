<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->integer('country_id');
            $table->integer('category_id');
            $table->integer('language_id');
            $table->integer('city_id');
            $table->string('name');
            $table->string('content');
            $table->string('file');
            $table->string('image');
            $table->boolean('active')->default(1);
            $table->string('seo_url')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->text('tags');
            $table->integer('rank');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->boolean('cancel')->default(0);
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
        Schema::dropIfExists('bids');
    }
}
