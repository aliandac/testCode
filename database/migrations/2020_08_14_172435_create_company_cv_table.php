<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyCvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_cv', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company');
            $table->string('title',200);
            $table->string('applicant_experience',10)->comment('aday tecrübesi');
            $table->boolean('applicant_military_service')->comment('aday Askerlik durumu')->nullable()->default(0);
            $table->string('applicant_education')->comment(' eğitim durumu');
            $table->string('position_department')->comment('hangi departman yazılacak');
            $table->string('position_mode_of_operation')->comment('Çalışma Şekli');
            $table->string('position_status')->comment('pozisyondaki ünvanı');
            $table->string('position_count')->comment('Pozisyondaki çalışan sayısı');
            $table->integer('position_country')->comment('hangi Ülkede');
            $table->integer('position_city')->comment('hangi Şehir');
            $table->longText('content')->nullable();
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
        Schema::dropIfExists('company_cv');
    }
}
