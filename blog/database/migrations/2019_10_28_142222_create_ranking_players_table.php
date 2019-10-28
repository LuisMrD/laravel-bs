<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRankingPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranking_players', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('ranking_id');
            $table->integer('player_id');

            $table->foreign('ranking_id')
            ->references('id')
            ->on('rankings');

            $table->foreign('player_id')
            ->references('id')
            ->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ranking_players');
    }
}
