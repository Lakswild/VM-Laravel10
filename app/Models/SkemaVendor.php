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
 * Class SkemaVendor
 * 
 * @property int $id
 * @property int $akun_id
 * @property string $kode
 * @property string $deskripsi
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Akun $akun
 * @property Collection|OnForm[] $on_forms
 *
 * @package App\Models
 */
class SkemaVendor extends Model
{
	use SoftDeletes;
	protected $table = 'skema_vendor';

	protected $casts = [
		'akun_id' => 'int'
	];

	protected $fillable = [
		'akun_id',
		'kode',
		'deskripsi'
	];

	public function akun()
	{
		return $this->belongsTo(Akun::class);
	}

	public function on_forms()
	{
		return $this->hasMany(OnForm::class);
	}
}
