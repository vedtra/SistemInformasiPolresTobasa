<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemohonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemohons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nopendaftaran');
            $table->string('namapemohon');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->string('agama');
            $table->string('kebangsaan');
            $table->string('jeniskelamin');
            $table->string('statusperkawinan');
            $table->string('pekerjaan');
            $table->string('status');
            $table->string('alamat');
            $table->string('nopassport');
            $table->string('noktp');
            $table->string('notelp');
            $table->text('imagesktp');
            $table->text('imageskk');
            $table->text('imagesakte');
            $table->string('nama_istrisuami');
            $table->string('umur_istrisuami');
            $table->string('agama_istrisuami');
            $table->string('kebangsaan_istrisuami');
            $table->string('pekerjaan_istrisuami');
            $table->string('alamat_istrisuami');
            $table->string('nama_bapak');
            $table->string('umur_bapak');
            $table->string('agama_bapak');
            $table->string('kebangsaan_bapak');
            $table->string('pekerjaan_bapak');
            $table->string('alamat_bapak');
            $table->string('nama_ibu');
            $table->string('umur_ibu');
            $table->string('agama_ibu');
            $table->string('kebangsaan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_ibu');
            $table->string('nama_saudrapertama');
            $table->string('umur_saudrapertama');
            $table->string('pekerjaan_saudrapertama');
            $table->string('alamat_saudrapertama');
            $table->string('nama_saudrakedua');
            $table->string('umur_saudrakedua');
            $table->string('pekerjaan_saudrakedua');
            $table->string('alamat_saudrakedua');
            $table->string('nama_saudraketiga');
            $table->string('umur_saudraketiga');
            $table->string('pekerjaan_saudraketiga');
            $table->string('alamat_saudraketiga');
            $table->string('nama_saudrakeempat');
            $table->string('umur_saudrakeempat');
            $table->string('pekerjaan_saudrakeempat');
            $table->string('alamat_saudrakeempat');
            $table->string('jenjangpendidikansatu');
            $table->string('jenjangpendidikandua');
            $table->string('jenjangpendidikantiga');
            $table->string('jenjangpendidikanempat');
            $table->string('jenjangpendidikanlima');
            $table->text('pertanyaan_perkara');
            $table->text('perkaraapa');
            $table->text('putusanhakim');
            $table->text('apakahdalamproseshukum');
            $table->text('sejauhmana');
            $table->text('pelanggaranhukum');
            $table->text('pelanggaranapa');
            $table->text('sejauhmanapelanggaran');
            $table->text('riwayat_pekerjaan');
            $table->text('hoby');
            $table->text('alamatygmudahdihub');
            $table->text('sponsor');
            $table->text('alamatsponsor');
            $table->text('telpsponsor');
            $table->text('jenisusaha');
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
        Schema::drop('pemohons');
    }
}
