<?php

namespace App\Models;
use App\Models\Kasus;

use Illuminate\Database\Eloquent\Model;

class Tkp extends Model
{
    protected $table = 'tkps';

    protected $primaryKey = 'id_tkp';

    protected $dates = ['deleted_at'];
    protected $fillable = ['kode_kasus','nama_tempat','alamat'];

    public function kasus(){
		return $this->belongsTo('App\Models\Kasus','kode_kasus');
	}
}
