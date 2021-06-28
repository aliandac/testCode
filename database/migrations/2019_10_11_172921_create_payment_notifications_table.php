<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id')->comment('notification company id');
            $table->integer('package_id');
            $table->string('sender_name');
            $table->string('send_email')->comment('sender email');
            $table->integer('send_amount')->comment('sender amount');
            $table->boolean('active');
            $table->dateTime('send_time')->comment('send time');
            $table->softDeletes();
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


        Schema::dropIfExists('payment_notifications');
    }
}
