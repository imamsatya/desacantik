<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juduls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->timestamps();
        });

        Schema::table('juduls', function (Blueprint $table){
            $table->integer('kategori_id')->unsigned()->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategoris');
            
        });

        Schema::table('juduls', function (Blueprint $table){
            $table->integer('tahun_id')->unsigned()->nullable();
            $table->foreign('tahun_id')->references('id')->on('tahuns');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juduls');
    }
}
