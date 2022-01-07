<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variabels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('variabel');
            $table->timestamps();
        });

        Schema::table('variabels', function (Blueprint $table){
            $table->integer('judul_id')->unsigned()->nullable();
            $table->foreign('judul_id')->references('id')->on('juduls');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variabels');
    }
}
