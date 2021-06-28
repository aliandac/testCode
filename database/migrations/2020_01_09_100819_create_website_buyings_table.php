<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteBuyingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_buyings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id');
            $table->bigInteger('website_id');
            $table->json('website_info');
            $table->bigInteger('merchant_id');
            $table->boolean('active')->default(0);
            $table->string('domain');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_buyings');
    }
}
