<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perencanaan extends Model
{
    protected $table = 'perencanaans';

    protected $primaryKey = 'id_perencanaan';

    protected $dates = ['deleted_at'];
    protected $fillable = ['divisi','nama_kegiatan', 'tanggal', 'waktu', 'tempat_pelaksanaan', 'deskripsi'];
}
