<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_experience', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user')->comment('cv user id');
            $table->string('position',300)->comment('pozisyonu belirticek');
            $table->string('company')->comment('firma adı');
            $table->integer('country');
            $table->integer('city');
            $table->string('company_sector')->comment('firma sektörü');
            $table->date('start_date');
            $table->boolean('working')->nullable();
            $table->date('end_date')->nullable();
            $table->string('authority')->comment('firmadaki pozisyonu');
            $table->string('business_area')->comment('çalışma pozisyonu');
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
        Schema::dropIfExists('cv_experience');
    }
}
