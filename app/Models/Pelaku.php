<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelaku extends Model
{
    protected $table = 'pelakus';

    protected $primaryKey = 'id_pelaku';

    protected $dates = ['deleted_at'];
    protected $fillable = ['kode_kasus','nama_pelaku','agama','jeniskelamin','tgllahir_pelaku','alamat','kewarganegaraan','images_pelaku'];

    public function kasus(){
		return $this->belongsTo('App\Models\Kasus', 'kode_kasus');
	}
}
