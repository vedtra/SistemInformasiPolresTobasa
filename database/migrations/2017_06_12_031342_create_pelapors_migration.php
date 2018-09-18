<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelaporsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelapors', function (Blueprint $table) {
            $table->increments('id_pelapor');
            $table->integer('kode_kasus')->unsigned();
            $table->string('nama_pelapor');
            $table->string('agama');
            $table->string('jeniskelamin');
            $table->date('tgllahir_pelapor');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('notelp');
            $table->string('kewarganegaraan');
            $table->text('images');
            $table->timestamps();
            $table->foreign('kode_kasus')->references('id_kasus')->on('kasus')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelapors');
    }
}
