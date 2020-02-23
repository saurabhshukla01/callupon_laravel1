<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->char('category_code',25);
            $table->char('category_name',100);
            $table->char('category_logo',255);
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
        Schema::dropIfExists('pt_category');
    }
}
