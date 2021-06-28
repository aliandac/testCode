<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FairReminders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fair_reminders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('day');
            $table->date('start_date');
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
        Schema::dropIfExists('fair_reminders');
    }
}
