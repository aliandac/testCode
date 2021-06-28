<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCampaignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_campaign', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('content')->nullable();
            $table->integer('category')->nullable();
            $table->integer('company')->nullable()->default(0);
            $table->boolean('active')->default(0)->nullable();
            $table->integer('rank')->nullable()->default(0);
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
        Schema::dropIfExists('product_campaign');
    }
}
