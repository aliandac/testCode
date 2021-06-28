<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->integer('language_id');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->string('name')->comment(' indicate executions name');
            $table->string('main')->comment(' indicate executions main');
            $table->string('file')->comment(' file name');
            $table->string('file_extension')->comment(' file extension');
            $table->string('seo_url');
            $table->string('seo_keywords');
            $table->integer('rank')->comment('specifies the sequence number');
            $table->boolean('active')->comment('specifies the sequence number')->default(1);
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
        Schema::dropIfExists('executions');
    }
}
