<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->string('name')->comment('indicate name and username of company,for example  dılo sürücü');
            $table->text('message_thread');
            $table->text('message_container');
            $table->string('phone')->comment('phone number of company contact');
            $table->string('email')->comment('email address for company contact');
            $table->boolean('active')->default(0)->comment('indicate does active status to the company contact');
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
        Schema::dropIfExists('company_contacts');
    }
}
