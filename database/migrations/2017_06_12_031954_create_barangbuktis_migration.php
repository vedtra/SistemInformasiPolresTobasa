<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangbuktisMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangbuktis', function (Blueprint $table) {
            
            $table->increments('id_barangbukti');
            $table->integer('kode_kasus')->unsigned();
            $table->string('nama_barang');
            $table->string('keterangan');
            $table->text('images_barang');
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
        Schema::dropIfExists('barangbuktis');
    }
}
