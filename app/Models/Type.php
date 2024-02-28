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
 * Class Type
 * 
 * @property int $id
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
class Type extends Model
{
	use SoftDeletes;
	protected $table = 'type';

	protected $fillable = [
		'type'
	];

	public function forms()
	{
		return $this->hasMany(Form::class);
	}

	public function setting_documents()
	{
		return $this->hasMany(SettingDocument::class);
	}
}
