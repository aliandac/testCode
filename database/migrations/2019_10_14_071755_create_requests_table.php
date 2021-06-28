<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->comment('request(demand) title');
            $table->integer('category_id');
            $table->integer('company_id');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->integer('language_id');
            $table->integer('request_type');
            $table->string('company_name');
            $table->string('description');
            $table->text('company_address');
            $table->string('second_phone');
            $table->string('first_phone');
            $table->string('fax_phone');
            $table->time('working_hours_start');
            $table->time('working_hours_end');
            $table->string('company_username');
            $table->string('website_url');
            $table->string('company_whatsapp');
            $table->string('img_url');
            $table->string('seo_url');
            $table->boolean('active')->default(1);
            $table->text('tags')->comment('tags as such foo,blaa,etc,vs');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE requests ADD FULLTEXT fulltext_index (title, description,tags)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
