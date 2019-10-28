<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('colocacao');
            $table->integer('player_id');
            $table->integer('report_id');

            $table->foreign('player_id')
            ->references('id')
            ->on('players');

            $table->foreign('report_id')
            ->references('id')
            ->on('reports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_reports');
    }
}
