<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageBuyingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_buyings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('package_id');
            $table->decimal('price');
            $table->json('features');
            $table->json('important_features');
            $table->bigInteger('company_id');
            $table->bigInteger('merchant_id');
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
        Schema::dropIfExists('package_buyings');
    }
}
