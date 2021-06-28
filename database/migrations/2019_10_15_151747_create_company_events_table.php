<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('event name');
            $table->string('image')->nullable()->comment('event image url ');
            $table->text('description')->comment('event name');
            $table->dateTime('date')->comment('celebration date');
            $table->time('time');
            $table->string('location');
            $table->text('address')->comment('activity address');
            $table->string('longitude');
            $table->string('latitude');
            $table->integer('company_id');
            $table->text('tags');
            $table->boolean('cancel');
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('company_events');
    }
}
