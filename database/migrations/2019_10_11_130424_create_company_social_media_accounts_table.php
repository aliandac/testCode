<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanySocialMediaAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_social_media_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('facebook_url')->comment("indicates company's facebook url");
            $table->integer('company_id');
            $table->boolean('facebook_active')->default(1)->comment("indicates company's facebook url activity return boolean");
            $table->string('twitter_url')->comment("indicates company's twitter url");
            $table->boolean('twitter_active')->default(1)->comment("indicates company's twitter url activity return boolean");
            $table->string('youtube_url')->comment("indicates company's youtube url");
            $table->string('youtube_active')->default(1)->comment("indicates company's youtube url activity return boolean");
            $table->boolean('active')->comment("indicates activity status return boolean");

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
        Schema::dropIfExists('company_social_media_accounts');
    }
}
