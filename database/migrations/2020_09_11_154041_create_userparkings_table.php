<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserparkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userparkings', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('iduser');
            $table->string('uname');
            $table->string('ulname');
            $table->string('vtype');
            $table->string('vpuesto');
            $table->string('vbrand');
            $table->string('vplate');
            $table->date('vdate');
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
        Schema::dropIfExists('userparkings');
    }
}
