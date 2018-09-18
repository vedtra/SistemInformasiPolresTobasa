<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerencanaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perencanaans', function (Blueprint $table) {
            $table->increments('id_perencanaan');
            $table->integer('divisi');
            $table->string('nama_kegiatan');
            $table->date('tanggal');
            $table->string('waktu');
            $table->string('tempat_pelaksanaan');
            $table->text('deskripsi');
            $table->double('anggaran');
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
