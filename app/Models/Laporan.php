<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporans';

    protected $primaryKey = 'id_laporan';

    protected $dates = ['deleted_at'];
    protected $fillable = ['nama_file','divisi'];
}
