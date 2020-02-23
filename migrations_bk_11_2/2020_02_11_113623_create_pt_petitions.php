<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtPetitions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt_petitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('petition_id');
            $table->char('petition_uid',13);
            $table->integer('category_id');
            $table->integer('user_id');
            $table->string('petition_title');
            $table->char('petition_image');
            $table->text('petition_url');
            $table->text('petition_description');
            $table->integer('petition_signed_count');
            $table->integer('petition_share_count');
            $table->integer('petiton_viewed_count');
            $table->integer('petition_goal');
            $table->integer('petition_status')->NULL[0];
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
        Schema::dropIfExists('pt_petitions');
    }
}
