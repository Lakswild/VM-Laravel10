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
 * Class Level
 * 
 * @property int $id
 * @property int $perusahaan_id
 * @property string $nama
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Perusahaan $perusahaan
 * @property Collection|Status[] $statuses
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Level extends Model
{
	use SoftDeletes;
	protected $table = 'level';

	protected $casts = [
		'perusahaan_id' => 'int'
	];

	protected $fillable = [
		'perusahaan_id',
		'nama'
	];

	public function perusahaan()
	{
		return $this->belongsTo(Perusahaan::class);
	}

	public function statuses()
	{
		return $this->belongsToMany(Status::class)
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
