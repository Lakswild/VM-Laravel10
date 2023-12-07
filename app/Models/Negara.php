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
 * Class Negara
 * 
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Provinsi[] $provinsis
 *
 * @package App\Models
 */
class Negara extends Model
{
	use SoftDeletes;
	protected $table = 'negara';

	protected $fillable = [
		'kode',
		'nama'
	];

	public function provinsis()
	{
		return $this->hasMany(Provinsi::class);
	}
}
