<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->comment('order type');
            $table->string('payment_type')->comment('payment type');
            $table->integer('customer_id')->comment('customer_id');
            $table->string('email')->comment('customer email');
            $table->text('address')->comment('customer address');
            $table->string('phone')->comment('customer phone');
            $table->string('customer_name');
            $table->integer('amount')->comment('order amount');
            $table->decimal('payment_amount',10,2)->comment('payment amount');
            $table->boolean('active');
            $table->string('status')->comment('order status');
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
        Schema::dropIfExists('orders');
    }
}
