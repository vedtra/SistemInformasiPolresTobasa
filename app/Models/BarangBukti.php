<?php

namespace App\Models;
use App\Models\Kasus;

use Illuminate\Database\Eloquent\Model;

class BarangBukti extends Model
{
    protected $table = 'barangbuktis';

    protected $primaryKey = 'id_barangbukti';

    protected $dates = ['deleted_at'];
    protected $fillable = ['kode_kasus','nama_barang','keterangan','images_barang'];

    public function kasus(){
		return $this->belongsTo('App\Models\Kasus','kode_kasus');
	}
}
