<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('admin_id');
            $table->string('admin_uid');
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('email',50);
            $table->integer('mobileno');
            $table->string('password');
            $table->string('status');
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
        Schema::dropIfExists('pt_admins');
    }
}
