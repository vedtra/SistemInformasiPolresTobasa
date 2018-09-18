<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTkpsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tkps', function (Blueprint $table) {
            $table->increments('id_tkp');
            $table->integer('kode_kasus')->unsigned();
            $table->string('nama_tempat');
            $table->string('alamat');
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
        Schema::dropIfExists('tkps');
    }
}
