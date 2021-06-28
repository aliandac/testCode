<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('zip_code');
            $table->integer('category_id');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->integer('district_id')->nullable();
            $table->integer('language_id');
            $table->integer('dealer_id')->nullable();
            $table->string('name');
            $table->string('description');
            $table->text('address_description')->comment('addres descrription');
            $table->string('email')->comment('company email');
            $table->string('address');
            $table->integer('user_id');
            $table->integer('whatsapp_no');
            $table->string('authorized_person');
            $table->string('work_days',45);
            $table->string('first_phone');
            $table->string('second_phone');
            $table->string('fax_number');
            $table->string('map_url');
            $table->string('video');
            $table->string('image');
            $table->string('cover_image');
            $table->string('website_url');
            $table->time('work_start_time');
            $table->time('work_finish_time');
            $table->text('seo_keywords');
            $table->string('seo_url');
            $table->integer('package_id');
            $table->boolean('payment')->default(0);
            $table->dateTime('package_end_date');
            $table->boolean('active')->default(0);
            $table->integer('views_count');
            $table->string('working_days');
            $table->double('latitude',15,8);
            $table->double('longitude',15,8);
            $table->longText('tags');
            $table->string('tax_office',200)->nullable();
            $table->string('tax_number',200)->nullable();
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
        Schema::dropIfExists('companies');
    }
}
