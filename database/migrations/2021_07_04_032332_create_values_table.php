<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('index');
            $table->string('value');
            $table->timestamps();
        });

        Schema::table('values', function (Blueprint $table){
            $table->integer('variabel_id')->unsigned()->nullable();
            $table->foreign('variabel_id')->references('id')->on('variabels');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('values');
    }
}
