<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyingAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buying_advertisements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->integer('advertisement_id');
            $table->json('advertisement_information');
            $table->string('date')->nullable();
            $table->string('image')->nullable()->default(null);
            $table->boolean('publishing')->default(0);
            $table->boolean('active')->default(0);
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
        Schema::dropIfExists('buying_advertisements');
    }
}
