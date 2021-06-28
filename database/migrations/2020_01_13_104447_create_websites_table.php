<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',500);
            $table->string('slug',1000);
            $table->string('url',200);
            $table->string('teknology',200);
            $table->decimal('price',10,2);
            $table->decimal('discount',10,2);
            $table->longText('content');
            $table->string('description',200)->nullable();
            $table->string('keywords',200)->nullable();
            $table->integer('order')->nullable()->default(0);
            $table->boolean('active')->default(0)->nullable();
            $table->string('version',20);
            $table->integer('views');
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
        Schema::dropIfExists('websites');
    }
}
