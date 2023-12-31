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
 * Class User
 * 
 * @property int $id
 * @property string $no
 * @property string $nama
 * @property string $email
 * @property string $password
 * @property string $aktif
 * @property string $su
 * @property int $level_id
 * @property int $perusahaan_id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Level $level
 * @property Perusahaan $perusahaan
 * @property Collection|Form[] $forms
 * @property Collection|OnForm[] $on_forms
 *
 * @package App\Models
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'user';

	protected $casts = [
		'level_id' => 'int',
		'perusahaan_id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'no',
		'nama',
		'email',
		'password',
		'aktif',
		'su',
		'level_id',
		'perusahaan_id'
	];

	public function level()
	{
		return $this->belongsTo(Level::class);
	}

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
}
