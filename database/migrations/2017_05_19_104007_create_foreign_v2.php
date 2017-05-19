<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rank', function (Blueprint $table) {
            $table->foreign('campain_id')->references('campain_id')->on('campain');

            $table->foreign('game_id')->references('game_id')->on('game_rating');
        });

        Schema::table('comment', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users');

            $table->foreign('campain_id')->references('campain_id')->on('campain');
        });

        Schema::table('game_in_campain', function (Blueprint $table) {
            $table->foreign('campain_id')->references('campain_id')->on('campain');

            $table->foreign('game_id')->references('game_id')->on('game_rating');
        });

        Schema::table('result', function (Blueprint $table) {
            $table->foreign('criteria_id')->references('criteria_id')->on('criteria');

            $table->foreign('user_id')->references('user_id')->on('users');

            $table->foreign('gic_id')->references('gic_id')->on('game_in_campain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
