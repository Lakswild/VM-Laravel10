<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LevelStatus
 * 
 * @property int $id
 * @property int $level_id
 * @property int $status_id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Level $level
 * @property Status $status
 *
 * @package App\Models
 */
class LevelStatus extends Model
{
	use SoftDeletes;
	protected $table = 'level_status';

	protected $casts = [
		'level_id' => 'int',
		'status_id' => 'int'
	];

	protected $fillable = [
		'level_id',
		'status_id'
	];

	public function level()
	{
		return $this->belongsTo(Level::class);
	}

	public function status()
	{
		return $this->belongsTo(Status::class);
	}
}
