<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->dateTime('date');
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('bus_id')->unsigned();
            $table->integer('station_id_from')->unsigned();
            $table->integer('station_id_to')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bus_id')->references('id')->on('buses');
            $table->foreign('station_id_from')->references('id')->on('stations');
            $table->foreign('station_id_to')->references('id')->on('stations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
