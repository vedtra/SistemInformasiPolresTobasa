<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
    protected $table ='anggarans';

    protected $primaryKey = 'id_anggaran';

    protected $dates = ['deleted_at'];
}
