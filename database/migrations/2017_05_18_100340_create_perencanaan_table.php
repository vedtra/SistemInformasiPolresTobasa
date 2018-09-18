<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerencanaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perencanaans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('divisi');
            $table->string('nama_kegiatan');
            $table->date('tanggal');
            $table->string('waktu');
            $table->string('tempat_pelaksanaan');
            $table->text('deskripsi');
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
        Schema::drop('perencanaans');
    }
}
