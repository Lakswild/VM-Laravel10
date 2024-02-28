<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FormChat
 * 
 * @property int $id
 * @property int $form_id
 * @property int|null $from
 * @property string $message
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Form $form
 * @property User|null $user
 *
 * @package App\Models
 */
class FormChat extends Model
{
	use SoftDeletes;
	protected $table = 'form_chat';

	protected $casts = [
		'form_id' => 'int',
		'from' => 'int'
	];

	protected $fillable = [
		'form_id',
		'from',
		'message'
	];

	public function form()
	{
		return $this->belongsTo(Form::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'from');
	}
}
