<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ProjectID')->unsigned();
            $table->foreign('ProjectID')->references('id')->on('projects')->onDelete('cascade');

            $table->integer('WorkerID')->unsigned();
            $table->foreign('WorkerID')->references('id')->on('users')->onDelete('cascade');

            $table->integer('Price');

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
        Schema::drop('details');
    }
}
