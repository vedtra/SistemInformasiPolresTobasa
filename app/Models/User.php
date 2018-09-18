<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id_user';

    protected $dates = ['deleted_at'];
    protected $fillable = ['username','role','password'];

    public function userRole(){
		return $this->hasOne('App\Models\UserRole','id_divisi','role');
	}
}
