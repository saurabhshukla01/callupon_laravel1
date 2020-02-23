<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id');
            $table->char('user_uid',13);
            $table->char('user_name',100);
            $table->char('user_password',255);
            $table->char('user_mobile',100);
            $table->char('user_email',100);
            $table->char('user_picture',100);
            $table->enum('user_gender');
            $table->char('user_locale',255);
            $table->char('user_link',255);
            $table->text('google_access_token',255);
            $table->char('google_oauth_uid',255);
            $table->char('facebook_oauth_uid',255);
            $table->char('twitter_consumer_key',255);
            $table->char('twitter_consumer_secret',255);
            $table->char('twitter_access_token',255);
            $table->char('twitter_access_token_secret',255);
            $table->integer('status');
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
        Schema::dropIfExists('pt_users');
    }
}
