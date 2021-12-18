<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnologies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->string('code',10);
            $table->string('name',100);
            $table->string('description');
            $table->integer('price');
            $table->tinyInteger('certificate')->default('1');
            $table->string('img_url',200)->default('/img/logo_mini_transparent_gray.png');
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('area_id');


            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('area_id')->references('id')->on('technologies_areas');





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
        Schema::dropIfExists('technologies');
    }
}