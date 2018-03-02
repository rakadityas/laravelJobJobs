<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('LevelID')->unsigned();
            $table->foreign('LevelID')->references('id')->on('partner_levels')->onDelete('cascade');

            $table->integer('AccountTypeID')->unsigned();
            $table->foreign('AccountTypeID')->references('id')->on('account_types')->onDelete('cascade');

            $table->string('Username');
            $table->string('password');
            $table->string('Location');
            $table->string('Email')->unique();
            $table->string('Phone');
            $table->string('Gender');
            $table->string('Address');
            $table->integer('Seen');
            $table->string('Desc');
            $table->string('PictURL');


            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
