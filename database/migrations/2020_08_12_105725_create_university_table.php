<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('country');
            $table->integer('city');
            $table->string('name');
            $table->string('logo');
            $table->boolean('active')->default(0)->nullable();
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
        Schema::dropIfExists('university');
    }
}
