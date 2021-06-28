<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualFairStandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_fair_stand', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('standId');
            $table->string('standName');
            $table->string('product');
            $table->string('video');
            $table->tinyInteger('active');
            $table->string('image');
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
        Schema::dropIfExists('virtual_fair_stand');
    }
}
