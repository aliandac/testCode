<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversityEpisodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_episode', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('university')->nullable();
            $table->integer('faculty');
            $table->string('name');
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
        Schema::dropIfExists('university_episode');
    }
}
