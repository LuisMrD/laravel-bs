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
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('position');
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('report_id');

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
