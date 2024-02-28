<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Approval
 * 
 * @property int $id
 * @property int $company_id
 * @property int $step
 * @property string $name
 * @property string $description
 * @property int|null $user_id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property User|null $user
 *
 * @package App\Models
 */
class Approval extends Model
{
	use SoftDeletes;
	protected $table = 'approval';

	protected $casts = [
		'company_id' => 'int',
		'step' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'step',
		'name',
		'description',
		'user_id'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
