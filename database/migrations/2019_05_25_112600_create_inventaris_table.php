<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama');
            $table->string('kondisi');
            $table->string('keterangan');
            $table->integer('jumlah')->unsigned();
            $table->integer('jenis_id')->unsigned();
            $table->integer('ruang_id')->unsigned();
            $table->string('kode_inventaris');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('jenis_id')->references('id')->on('jenis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ruang_id')->references('id')->on('ruangs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
}
