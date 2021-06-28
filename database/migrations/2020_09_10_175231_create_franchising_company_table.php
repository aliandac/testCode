<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchisingCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchising_company', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user');
            $table->string('company_name',200);
            $table->string('phone',20);
            $table->string('mail',100);
            $table->string('address',300);
            $table->integer('country');
            $table->integer('city');
            $table->string('post_code',40);
            $table->string('tax_number',25);
            $table->string('tax_office',50);
            $table->boolean('active')->default(0)->nullable();
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
        Schema::dropIfExists('franchising_company');
    }
}
