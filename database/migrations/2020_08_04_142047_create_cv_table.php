<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user');
            $table->string('image',150)->comment('resim')->nullable();
            $table->string('address',400)->comment('adresi')->nullable();
            $table->string('name',500)->comment('Kişi Adı');
            $table->date('date_of_birth')->comment('dogum tarihi');
            $table->string('first_phone',30)->comment('birinci telefonu');
            $table->string('phone',30)->comment('ikinci telefon')->nullable();
            $table->string('web_page',250)->nullable()->comment('web sitesi');
            $table->boolean('gender')->comment('cinsiyet')->nullable()->default(null);
            $table->string('mail',130)->comment('mail adresi');
            $table->string('nationality',1000)->comment('uyruk');
            $table->string('driver_license',50)->comment('ehliyet');
            $table->string('salary',100)->comment('maaş');
            $table->string('currency',20)->comment('Para Birimi');
            $table->boolean('military_service')->comment('askerlik durumu')->nullable()->default(null);
            $table->longText('summary_info')->comment('özet bilgi')->nullable();
            $table->longText('ability')->comment('Yetenekler')->nullable();
            $table->longText('grants')->comment('burs')->nullable();
            $table->longText('hobbies')->comment('hobileri')->nullable();
            $table->boolean('clarification')->default(1);
            $table->boolean('reference')->default(1);
            $table->boolean('active')->default(0);
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
        Schema::dropIfExists('cv');
    }
}
