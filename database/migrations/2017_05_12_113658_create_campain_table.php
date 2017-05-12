<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campain', function (Blueprint $table) {
            $table->increments('campain_id');
            $table->string('name_campain', 50);
            $table->string('start_date');
            $table->integer('end_date');
            $table->string('description');
            $table->string('status');
            $table->integer('admin_id')->unsigned();
               
            
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
        Schema::dropIfExists('campain');
    }
}
