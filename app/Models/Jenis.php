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
 * Class Jenis
 * 
 * @property int $id
 * @property string $jenis
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Form[] $forms
 * @property Collection|OnForm[] $on_forms
 *
 * @package App\Models
 */
class Jenis extends Model
{
	use SoftDeletes;
	protected $table = 'jenis';

	protected $fillable = [
		'jenis'
	];

	public function forms()
	{
		return $this->hasMany(Form::class, 'jenis_id');
	}

	public function on_forms()
	{
		return $this->hasMany(OnForm::class, 'jenis_id');
	}
}
