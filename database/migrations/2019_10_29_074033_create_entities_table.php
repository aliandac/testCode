<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('city_id');
            $table->string('name');
            $table->text('description');
            $table->string('payment_type')->comment('payment_types such as 1,2,3');
            $table->integer('machine_category_id');
            $table->boolean('active')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE entities ADD FULLTEXT fulltext_index (name, description)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entities');
    }
}
