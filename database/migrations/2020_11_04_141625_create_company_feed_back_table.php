<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyFeedBackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_feed_back', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company')->nullable();
            $table->string('companyName');
            $table->longText('messageTitle');
            $table->longText('message');
            $table->string('name');
            $table->string('email');
            $table->string('phone',14);
            $table->tinyInteger('active')->default(0)->nullable();
            $table->integer('status')->comment('gönderilmiş olan şikayetin statusunu belirleme 0 firma yanıtı bekleniyor 1 Firma yanıtladı 2 Firma Sorunu çözdür 3 Firma Sorunu Çözemedi')->nullable();
            $table->longText('companyMessage')->nullable();
            $table->tinyInteger('companyMessageActive')->default(0)->nullable();
            $table->longText('objectionMessage')->nullable();
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
        Schema::dropIfExists('company_feed_back');
    }
}
