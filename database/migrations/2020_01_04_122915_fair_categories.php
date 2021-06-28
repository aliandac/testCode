<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FairCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fair_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 250)->nullable();
            $table->string('description',500);
            $table->text('keywords');
            $table->string('image');
            $table->boolean('is_active')->default(0);
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
        Schema::dropIfExists('fair_categories');
    }
}
