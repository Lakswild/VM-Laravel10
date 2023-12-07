<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OnFormStatus
 * 
 * @property int $id
 * @property int $form_id
 * @property int $status_id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property OnForm $on_form
 * @property Status $status
 *
 * @package App\Models
 */
class OnFormStatus extends Model
{
	use SoftDeletes;
	protected $table = 'on_form_status';

	protected $casts = [
		'form_id' => 'int',
		'status_id' => 'int'
	];

	protected $fillable = [
		'form_id',
		'status_id'
	];

	public function on_form()
	{
		return $this->belongsTo(OnForm::class, 'form_id');
	}

	public function status()
	{
		return $this->belongsTo(Status::class);
	}
}
