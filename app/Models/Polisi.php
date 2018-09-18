<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Polisi extends Model
{
    protected $table = 'polisis';

    protected $primaryKey = 'id_anggota';

    protected $dates = ['deleted_at'];
    protected $fillable = ['nama','pangkat','divisi','tmt_pnkt','tanggal_lahir','suku_bangsa','jabatan_tmt','kelamin','status','pendidikan_terakhir','agama','dikjur','tanda_jasa','images'];
}
