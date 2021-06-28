<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_all', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name',500);
            $table->string('authorized_name',500);
            $table->string('phone',30);
            $table->string('mail',150);
            $table->longText('message');
            $table->string('form_name',150);
            $table->integer('sector')->nullable();
            $table->integer('user')->nullable();
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
        Schema::dropIfExists('form_all');
    }
}
