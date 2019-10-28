<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('data');
            $table->integer('hora');
            $table->string('rua');
            $table->integer('numero');
            $table->string('cidade');
            $table->string('estado');
            $table->integer('league_id');

            $table->foreign('league_id')
            ->references('id')
            ->on('leagues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
