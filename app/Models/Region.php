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
 * Class Region
 * 
 * @property int $id
 * @property int $country_id
 * @property string $code
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Country $country
 * @property Collection|Form[] $forms
 *
 * @package App\Models
 */
class Region extends Model
{
	use SoftDeletes;
	protected $table = 'region';

	protected $casts = [
		'country_id' => 'int'
	];

	protected $fillable = [
		'country_id',
		'code',
		'name'
	];

	public function country()
	{
		return $this->belongsTo(Country::class);
	}

	public function forms()
	{
		return $this->hasMany(Form::class);
	}
}
