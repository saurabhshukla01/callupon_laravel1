<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtPetitionsShare extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt_petitions_share', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('share_id');
            $table->integer('petition_id');
            $table->string('user_id');
            $table->integer('share_type');
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
        Schema::dropIfExists('pt_petitions_share');
    }
}
