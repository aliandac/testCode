<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageFranchisingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_franchising', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('package_id');
            $table->decimal('price',10,2);
            $table->decimal('dealer_price',10,2);
            $table->integer('country');
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('package_franchising');
    }
}
