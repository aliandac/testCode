<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('score', 15, 8);
            $table->integer('company_id');
            $table->ipAddress('ip');
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
        Schema::dropIfExists('survey_scores');
    }
}
