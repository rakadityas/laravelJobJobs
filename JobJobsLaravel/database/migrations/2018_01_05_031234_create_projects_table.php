<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ProjectCategoryID')->unsigned();
            $table->foreign('ProjectCategoryID')->references('id')->on('project_categories')->onDelete('cascade');

            $table->integer('PublisherID')->unsigned();
            $table->foreign('PublisherID')->references('id')->on('users')->onDelete('cascade');

            $table->integer('WorkerID')->unsigned();
            $table->foreign('WorkerID')->references('id')->on('users')->onDelete('cascade');

            $table->string('ProjectName');
            $table->string('Duration');
            $table->string('Scale'); //determines by algorithm
            $table->string('Description')->unique();
            $table->integer('Seen');
            $table->string('ExpectedLocation');
            $table->string('ExpectedUsers');
            $table->string('Status');
            $table->datetime('LastBid');
            $table->integer('Budget');



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
        Schema::drop('projects');
    }
}
