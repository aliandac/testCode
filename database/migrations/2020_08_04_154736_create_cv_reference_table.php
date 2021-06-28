<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvReferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_reference', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user');
            $table->string('reference_type',300);
            $table->string('reference_language',300)->comment('referans dili');
            $table->string('reference_name',100);
            $table->string('company_name',200);
            $table->string('company_position');
            $table->string('phone');
            $table->string('mail');
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
        Schema::dropIfExists('cv_reference');
    }
}
