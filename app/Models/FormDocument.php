<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FormDocument
 * 
 * @property int $id
 * @property int $form_id
 * @property int $document_id
 * @property string $name
 * @property string $type
 * @property int $required
 * @property string $path
 * @property int|null $created_by
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Form $form
 * @property User|null $user
 *
 * @package App\Models
 */
class FormDocument extends Model
{
	use SoftDeletes;
	protected $table = 'form_document';

	protected $casts = [
		'form_id' => 'int',
		'document_id' => 'int',
		'required' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'form_id',
		'document_id',
		'name',
		'type',
		'required',
		'path',
		'created_by'
	];

	public function form()
	{
		return $this->belongsTo(Form::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}
}
