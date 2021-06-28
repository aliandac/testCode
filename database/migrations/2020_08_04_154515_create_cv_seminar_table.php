<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvSeminarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_seminar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user');
            $table->string('education_name', 400)->comment('setifikanın adı');
            $table->string('institution',400)->comment('sertifikanın verildiği kurum');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('time');
            $table->longText('content')->nullable();
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
        Schema::dropIfExists('cv_seminar');
    }
}
