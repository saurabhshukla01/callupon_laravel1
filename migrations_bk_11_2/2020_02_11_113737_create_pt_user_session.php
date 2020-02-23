<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtUserSession extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt_user_session', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('id',40);
            $table->int('login_id');
            $table->char('ip_address');
            $table->integer('timestamp');
            $table->binary('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pt_user_session');
    }
}
