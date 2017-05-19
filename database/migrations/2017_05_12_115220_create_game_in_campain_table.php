<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameInCampainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_in_campain', function (Blueprint $table) {
            $table->increments('gic_id');
            $table->integer('campain_id')->unsigned();
            $table->integer('game_id')->unsigned();
            $table->integer('avg_point');
        
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
        Schema::dropIfExists('game_in_campain');
    }
}
