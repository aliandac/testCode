<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_complaints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('name and surname');
            $table->string('email')->comment("complainant's email address");
            $table->string('phone')->comment("complainant's phone number");
            $table->integer('company_id');
            $table->text('message');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('company_complaints');
    }
}
