<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id');
            $table->char('mobile',255);
            $table->char('firstName',255);
            $table->char('lastName',255);
            $table->char('gender',255);
            $table->char('email',255);
            $table->char('profilePic',512);
            $table->char('password',255);
            $table->dateTimeTz('createdAt');
            $table->dateTimeTz('updatedAt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
