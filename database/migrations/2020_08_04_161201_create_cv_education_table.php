<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user');
            $table->string('education_status',50);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('education_continues')->comment('devam ediyor')->default(0)->nullable();
            $table->boolean('education_abandonment')->comment('terk edilmiş')->default(0)->nullable();
            $table->string('grade_average_type',100)->comment('not ortalaması tipi')->nullable();
            $table->string('grade_average')->comment('not')->nullable();
            $table->string('school_name',400);
            $table->string('faculty',400);
            $table->string('episode',300)->comment('bölüm')->nullable();
            $table->integer('country');
            $table->integer('city');
            $table->string('language_of_instruction',50)->nullable();
            $table->string('teaching_type',50)->comment('öğrenim tipi')->nullable();
            $table->integer('scholarship')->comment('burs')->nullable();
            $table->longText('content')->nullable();
            $table->string('lateral_episode')->comment('yandal bölüm')->nullable();
            $table->string('lateral_not')->comment('yandal not')->nullable();
            $table->string('double_major_faculty')->comment('çift anadal fakultesi')->nullable();
            $table->string('double_major_episode')->comment('çift ana dal bölüm')->nullable();
            $table->string('double_major_not')->comment('çift ana dal not')->nullable();
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
        Schema::dropIfExists('cv_education');
    }
}
