<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('merchant_oid');
            $table->string('status');
            $table->decimal('total_amount',10,2)->comment('total amount');
            $table->string('hash')->comment('hash');
            $table->string('post_hash')->comment('post hash');
            $table->string('merchant_key');
            $table->string('merchant_salt');
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
        Schema::dropIfExists('payments');
    }
}
