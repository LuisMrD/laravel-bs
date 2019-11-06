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
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('date');
            $table->integer('hour');
            $table->integer('format');
            $table->integer('type');
            $table->integer('rule');
            $table->string('street');
            $table->integer('number');
            $table->string('complement');
            $table->string('city');
            $table->integer('status')->default(App\Enums\EventStatus::OPEN);
            $table->unsignedBigInteger('league_id');

            $table->foreign('league_id')
            ->references('id')
            ->on('leagues')
            ->onDelete('cascade');
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
