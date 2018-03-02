<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('PublisherID')->unsigned();
            $table->foreign('PublisherID')->references('id')->on('users')->onDelete('cascade');

            $table->integer('PaymentTypeID')->unsigned();
            $table->foreign('PaymentTypeID')->references('id')->on('payment_types')->onDelete('cascade');

            $table->datetime('TransactionDate');

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
        Schema::drop('headers');
    }
}
