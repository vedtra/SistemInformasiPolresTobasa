	<?php

namespace App\Models;

use App\Models\Kasus;
use App\Models\BarangBukti;
use App\Models\Pelaku;
use App\Models\Pelapor;
use App\Models\Tkp;

use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    protected $table = 'kasus';

    protected $primaryKey = 'id_kasus';

    protected $dates = ['deleted_at'];
    protected $fillable = ['nama_kasus','waktu_kejadian'];

    public function barbut()
	{
		return $this->hasOne('App\Models\BarangBukti','kode_kasus');
	}

	public function dalaku()
	{
		return $this->hasOne('App\Models\Pelaku','kode_kasus');
	}

	public function dalapor()
	{
		return $this->hasOne('App\Models\Pelapor','kode_kasus');
	}

	public function datkp()
	{
		return $this->hasOne('App\Models\Tkp','kode_kasus');
	}
}
