<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualFairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_fair', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('standId');
            $table->bigInteger('company');
            $table->integer('infoType')->nullable();
            $table->string('video',1000)->nullable();
            $table->integer('productType')->nullable();
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
        Schema::dropIfExists('virtual_fair');
    }
}
