<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLobbies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lobbies', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('language')->nullable();
            $table->timestamp('play_date')->nullable();
            $table->unsignedBigInteger('difficulty');
            $table->integer('max_round')->default('3');
            $table->float('temperature')->default('0');
            $table->float('actual_gasses')->default('0');
            $table->unsignedBigInteger('gas_step')->nullable();
            $table->unsignedBigInteger('phase')->nullable();
            $table->tinyInteger('visible')->default('1');

            $table->timestamps();

            $table->foreign('language')->references('id')->on('languages');
            $table->foreign('difficulty')->references('id')->on('difficulties');
            $table->foreign('phase')->references('id')->on('phases');
            $table->foreign('gas_step')->references('id')->on('start_step_scales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lobbies');
    }
}
