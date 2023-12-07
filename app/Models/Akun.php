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
 * Class Akun
 * 
 * @property int $id
 * @property int $perusahaan_id
 * @property string $kode
 * @property string $deskripsi
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Perusahaan $perusahaan
 * @property Collection|Form[] $forms
 * @property Collection|OnForm[] $on_forms
 * @property Collection|SkemaVendor[] $skema_vendors
 *
 * @package App\Models
 */
class Akun extends Model
{
	use SoftDeletes;
	protected $table = 'akun';

	protected $casts = [
		'perusahaan_id' => 'int'
	];

	protected $fillable = [
		'perusahaan_id',
		'kode',
		'deskripsi'
	];

	public function perusahaan()
	{
		return $this->belongsTo(Perusahaan::class);
	}

	public function forms()
	{
		return $this->hasMany(Form::class);
	}

	public function on_forms()
	{
		return $this->hasMany(OnForm::class);
	}

	public function skema_vendors()
	{
		return $this->hasMany(SkemaVendor::class);
	}
}
