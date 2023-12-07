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
 * Class Form
 * 
 * @property int $id
 * @property int $user_id
 * @property int $jenis_id
 * @property int $akun_id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 * @property Jenis $jenis
 * @property Akun $akun
 * @property Collection|FormDetail[] $form_details
 *
 * @package App\Models
 */
class Form extends Model
{
	use SoftDeletes;
	protected $table = 'form';

	protected $casts = [
		'user_id' => 'int',
		'jenis_id' => 'int',
		'akun_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'jenis_id',
		'akun_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function jenis()
	{
		return $this->belongsTo(Jenis::class, 'jenis_id');
	}

	public function akun()
	{
		return $this->belongsTo(Akun::class);
	}

	public function form_details()
	{
		return $this->hasMany(FormDetail::class);
	}
}
