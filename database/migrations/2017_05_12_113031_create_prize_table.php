<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prize', function (Blueprint $table) {
            $table->increments('prize_id');
            $table->string('name_prize', 50);
            $table->integer('campain_id')->unsigned();
          
            $table->integer('user_id')->unsigned();
           
            $table->integer('game_id')->unsigned();
          
            $table->integer('number');
            $table->string('description');
            
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
        Schema::dropIfExists('prize');
    }
}
