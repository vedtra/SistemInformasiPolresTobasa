<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelakusMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelakus', function (Blueprint $table) {
            $table->increments('id_pelaku');
            $table->integer('kode_kasus')->unsigned();
            $table->string('nama_pelaku');
            $table->string('agama');
            $table->string('jeniskelamin');
            $table->date('tgllahir_pelaku');
            $table->string('alamat');
            $table->string('kewarganegaraan');
            $table->text('images_pelaku');
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
        Schema::dropIfExists('pelakus');
    }
}
