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
 * Class Pembelian
 * 
 * @property int $id
 * @property int $perusahaan_id
 * @property string $kode
 * @property string $nama
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Perusahaan $perusahaan
 * @property Collection|OnForm[] $on_forms
 *
 * @package App\Models
 */
class Pembelian extends Model
{
	use SoftDeletes;
	protected $table = 'pembelian';

	protected $casts = [
		'perusahaan_id' => 'int'
	];

	protected $fillable = [
		'perusahaan_id',
		'kode',
		'nama'
	];

	public function perusahaan()
	{
		return $this->belongsTo(Perusahaan::class);
	}

	public function on_forms()
	{
		return $this->hasMany(OnForm::class);
	}
}
