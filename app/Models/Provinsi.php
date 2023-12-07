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
 * Class Provinsi
 * 
 * @property int $id
 * @property int $negara_id
 * @property string $kode
 * @property string $nama
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Negara $negara
 * @property Collection|OnForm[] $on_forms
 *
 * @package App\Models
 */
class Provinsi extends Model
{
	use SoftDeletes;
	protected $table = 'provinsi';

	protected $casts = [
		'negara_id' => 'int'
	];

	protected $fillable = [
		'negara_id',
		'kode',
		'nama'
	];

	public function negara()
	{
		return $this->belongsTo(Negara::class);
	}

	public function on_forms()
	{
		return $this->hasMany(OnForm::class);
	}
}
