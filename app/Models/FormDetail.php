<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FormDetail
 * 
 * @property int $id
 * @property int $form_id
 * @property int $tipe_input_id
 * @property int|null $status_id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Form $form
 * @property TipeInput $tipe_input
 * @property Status|null $status
 *
 * @package App\Models
 */
class FormDetail extends Model
{
	use SoftDeletes;
	protected $table = 'form_detail';

	protected $casts = [
		'form_id' => 'int',
		'tipe_input_id' => 'int',
		'status_id' => 'int'
	];

	protected $fillable = [
		'form_id',
		'tipe_input_id',
		'status_id'
	];

	public function form()
	{
		return $this->belongsTo(Form::class);
	}

	public function tipe_input()
	{
		return $this->belongsTo(TipeInput::class);
	}

	public function status()
	{
		return $this->belongsTo(Status::class);
	}
}
