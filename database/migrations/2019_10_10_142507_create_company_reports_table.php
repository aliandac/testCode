<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->string('name')->comment('name and surname');
            $table->string('email');
            $table->string('phone');
            $table->text('message');
            $table->boolean('active')->comment('indicates activity status');
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
        Schema::dropIfExists('company_reports');
    }
}
