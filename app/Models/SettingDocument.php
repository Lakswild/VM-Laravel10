<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SettingDocument
 * 
 * @property int $id
 * @property int $company_id
 * @property int $document_id
 * @property int $type_id
 * @property int $account_group_id
 * @property int $required
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property Document $document
 * @property Type $type
 * @property AccountGroup $account_group
 *
 * @package App\Models
 */
class SettingDocument extends Model
{
	use SoftDeletes;
	protected $table = 'setting_document';

	protected $casts = [
		'company_id' => 'int',
		'document_id' => 'int',
		'type_id' => 'int',
		'account_group_id' => 'int',
		'required' => 'int'
	];

	protected $fillable = [
		'company_id',
		'document_id',
		'type_id',
		'account_group_id',
		'required'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function document()
	{
		return $this->belongsTo(Document::class);
	}

	public function type()
	{
		return $this->belongsTo(Type::class);
	}

	public function account_group()
	{
		return $this->belongsTo(AccountGroup::class);
	}
}
