<?php

namespace App\Models;
use App\Models\UserRole;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'divisis';

    protected $primaryKey = 'id_divisi';

    protected $dates = ['deleted_at'];
    protected $fillable = ['nama_divisi'];

    public function user(){
		return $this->belongsTo('App\Models\User','id_user','id_divisi');
	}
}
