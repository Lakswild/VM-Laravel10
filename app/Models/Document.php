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
 * Class Document
 * 
 * @property int $id
 * @property string $name
 * @property string $type
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Form[] $forms
 * @property Collection|SettingDocument[] $setting_documents
 *
 * @package App\Models
 */
class Document extends Model
{
	use SoftDeletes;
	protected $table = 'document';

	protected $fillable = [
		'name',
		'type'
	];

	public function forms()
	{
		return $this->belongsToMany(Form::class, 'form_setting_document')
					->withPivot('id', 'name', 'type', 'required', 'created_by', 'deleted_at')
					->withTimestamps();
	}

	public function setting_documents()
	{
		return $this->hasMany(SettingDocument::class);
	}
}
