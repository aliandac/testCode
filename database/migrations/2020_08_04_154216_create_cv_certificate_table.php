<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvCertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_certificate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user');
            $table->string('certificate_name',500)->comment('sertifika adı');
            $table->string('institution')->comment('alınıgı kurum');
            $table->date('certificate_date');
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
        Schema::dropIfExists('cv_certificate');
    }
}
