<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company',255);
            $table->string('name',255);
            $table->string('phone',15);
            $table->string('email',45);
            $table->string('address',2000);
            $table->integer('fair_id');
            $table->string('website',63)->nullable();
            $table->string('message',5000)->nullable();
            $table->string('request_type',255)->nullable()->comment('Talep Türü');
            $table->string('total_size',255)->nullable()->comment('Alan Ölçüleri');
            $table->string('approximate_budget')->nullable()->comment('Yaklaşık Bütçe');
            $table->string('stand_size')->nullable()->comment('Stand Ölçüsü');
            $table->string('stand_area',10)->nullable()->comment('Stand Alanı Var Mı');
            $table->string('stand_shape',255)->nullable()->comment('Stand Şekli');
            $table->string('building_foundation',255)->nullable()->comment('Bina Temeli');
            $table->string('special_stand_budget',255)->nullable()->comment('Özel Stand Bütçesi');
            $table->string('operation',255)->nullable()->comment('İşlem');
            $table->string('stand_type',255)->nullable()->comment('Stand Tipi');
            $table->string('floor',255)->nullable()->comment('Zemin');
            $table->string('features',255)->nullable()->comment('Özellikler');
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
        Schema::dropIfExists('stands');
    }
}
