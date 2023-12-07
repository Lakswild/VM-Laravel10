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
 * Class MataUang
 * 
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|OnForm[] $on_forms
 *
 * @package App\Models
 */
class MataUang extends Model
{
	use SoftDeletes;
	protected $table = 'mata_uang';

	protected $fillable = [
		'kode',
		'nama'
	];

	public function on_forms()
	{
		return $this->hasMany(OnForm::class);
	}
}
