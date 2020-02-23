<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtPetitionsViewed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt_petitions_viewed', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('viewed_id');
            $table->integer('petition_id');
            $table->string('user_id');
            $table->dateTimeTz('date_added');
            $table->dateTimeTz('last_updated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pt_petitions_viewed');
    }
}
