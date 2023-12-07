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
 * Class Ketentuan
 * 
 * @property int $id
 * @property string $kode
 * @property string $ketentuan
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|OnForm[] $on_forms
 *
 * @package App\Models
 */
class Ketentuan extends Model
{
	use SoftDeletes;
	protected $table = 'ketentuan';

	protected $fillable = [
		'kode',
		'ketentuan'
	];

	public function on_forms()
	{
		return $this->hasMany(OnForm::class);
	}
}
