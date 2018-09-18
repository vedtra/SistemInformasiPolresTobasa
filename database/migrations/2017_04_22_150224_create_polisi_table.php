<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polisis', function (Blueprint $table) {
            $table->increments('id_anggota');
            $table->string('nama');
            $table->string('pangkat');
            $table->date('tmt_pnkt');
            $table->date('tanggal_lahir');
            $table->string('suku_bangsa');
            $table->date('jabatan_tmt');
            $table->string('kelamin');
            $table->string('status');
            $table->string('pendidikan_terakhir');
            $table->string('agama');
            $table->string('dikjur');
            $table->string('tanda_jasa');
            $table->string('images');
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
        Schema::drop('polisis');
    }
}
