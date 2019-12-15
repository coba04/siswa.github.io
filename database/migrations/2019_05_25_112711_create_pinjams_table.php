<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('inventaris_id')->unsigned();
            $table->integer('jumlah')->unigned();
            $table->timestamps();
            $table->foreign('inventaris_id')->references('id')->on('inventaris')->onUpdate('cascade')->onDalete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjams');
    }
}
