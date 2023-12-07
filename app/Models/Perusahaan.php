<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Perusahaan
 * 
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Akun[] $akuns
 * @property Collection|Level[] $levels
 * @property Collection|Pembelian[] $pembelians
 * @property Collection|Status[] $statuses
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Perusahaan extends Model
{
	use SoftDeletes;
	protected $table = 'perusahaan';

	protected $fillable = [
		'kode',
		'nama'
	];

	public function akuns()
	{
		return $this->hasMany(Akun::class);
	}

	public function levels()
	{
		return $this->hasMany(Level::class);
	}

	public function pembelians()
	{
		return $this->hasMany(Pembelian::class);
	}

	public function statuses()
	{
		return $this->hasMany(Status::class);
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
