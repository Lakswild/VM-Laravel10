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
 * Class Status
 * 
 * @property int $id
 * @property int $perusahaan_id
 * @property string $kode
 * @property string $nama
 * @property int $urutan
 * @property int $tipe
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Perusahaan $perusahaan
 * @property Collection|FormDetail[] $form_details
 * @property Collection|Level[] $levels
 * @property Collection|OnFormDetail[] $on_form_details
 * @property Collection|OnForm[] $on_forms
 *
 * @package App\Models
 */
class Status extends Model
{
	use SoftDeletes;
	protected $table = 'status';

	protected $casts = [
		'perusahaan_id' => 'int',
		'urutan' => 'int',
		'tipe' => 'int'
	];

	protected $fillable = [
		'perusahaan_id',
		'kode',
		'nama',
		'urutan',
		'tipe'
	];

	public function perusahaan()
	{
		return $this->belongsTo(Perusahaan::class);
	}

	public function form_details()
	{
		return $this->hasMany(FormDetail::class);
	}

	public function levels()
	{
		return $this->belongsToMany(Level::class)
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}

	public function on_form_details()
	{
		return $this->hasMany(OnFormDetail::class);
	}

	public function on_forms()
	{
		return $this->belongsToMany(OnForm::class, 'on_form_status', 'status_id', 'form_id')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}
}
