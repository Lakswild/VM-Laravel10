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
 * Class AccountGroup
 * 
 * @property int $id
 * @property int $company_id
 * @property string $code
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property Collection|Form[] $forms
 * @property Collection|SettingDocument[] $setting_documents
 *
 * @package App\Models
 */
class AccountGroup extends Model
{
	use SoftDeletes;
	protected $table = 'account_group';

	protected $casts = [
		'company_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'code',
		'description'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function forms()
	{
		return $this->hasMany(Form::class);
	}

	public function setting_documents()
	{
		return $this->hasMany(SettingDocument::class);
	}
}
