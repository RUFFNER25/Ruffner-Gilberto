<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadsTable extends Migration
{
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('day');
            $table->time('time');
            $table->unsignedBigInteger('recinto_id');
            $table->timestamps();

            $table->foreign('recinto_id')->references('id')->on('recintos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('actividads');
    }
}
