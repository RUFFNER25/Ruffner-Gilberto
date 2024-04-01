<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimals extends Migration
{
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('species_id');
            $table->unsignedBigInteger('habitat_id');
            $table->unsignedBigInteger('caregiver_id');
            $table->timestamps();

            $table->foreign('species_id')->references('id')->on('especies');
            $table->foreign('habitat_id')->references('id')->on('recintos');
            $table->foreign('caregiver_id')->references('id')->on('cuidadors');
        });
    }

    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
