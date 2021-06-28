<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualFairDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_fair_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('virtual');
            $table->integer('standId');
            $table->string('companyId');
            $table->string('productId');
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
        Schema::dropIfExists('virtual_fair_detail');
    }
}
