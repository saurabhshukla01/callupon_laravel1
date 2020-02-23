<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtPetitionsSigned extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt_petitions_signed', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('petition_id');
            $table->char('user_id');
            $table->text('description');
            $table->integer('display_name');
            $table->integer('display_comment');
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
        Schema::dropIfExists('pt_petitions_signed');
    }
}
