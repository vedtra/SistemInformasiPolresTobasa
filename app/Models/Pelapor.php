<?php

namespace App\Models;
use App\Models\Kasus;

use Illuminate\Database\Eloquent\Model;

class Pelapor extends Model
{
    protected $table = 'pelapors';

    protected $primaryKey = 'id_pelapor';

    protected $dates = ['deleted_at'];
    protected $fillable = ['kode_kasus','nama_pelapor','agama','jeniskelamin','tgllahir_pelapor','alamat','pekerjaan','notelp','kewarganegaraan','images'];

    public function kasus(){
		return $this->belongsTo('App\Models\Kasus','kode_kasus');
	}
}
