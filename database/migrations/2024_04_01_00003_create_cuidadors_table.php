<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuidadorsTable extends Migration
{
    public function up()
    {
        Schema::create('cuidadors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('specialty');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuidadors');
    }
}
