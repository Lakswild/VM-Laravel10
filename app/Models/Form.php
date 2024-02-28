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
 * Class Form
 * 
 * @property int $id
 * @property string|null $code
 * @property int $company_id
 * @property int $type_id
 * @property int $account_group_id
 * @property string $name
 * @property int $is_plantation
 * @property int $region_id
 * @property string $city
 * @property string $districts
 * @property string $street
 * @property string $phone_number
 * @property string $email
 * @property int $tax
 * @property string $npwp
 * @property string $nik
 * @property int|null $created_by
 * @property string $status
 * @property string $step
 * @property int $step_approval
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property Type $type
 * @property AccountGroup $account_group
 * @property Region $region
 * @property User|null $user
 * @property Collection|FormChat[] $form_chats
 * @property Collection|FormDocument[] $form_documents
 * @property Collection|Document[] $documents
 *
 * @package App\Models
 */
class Form extends Model
{
	use SoftDeletes;
	protected $table = 'form';

	protected $casts = [
		'company_id' => 'int',
		'type_id' => 'int',
		'account_group_id' => 'int',
		'is_plantation' => 'int',
		'region_id' => 'int',
		'tax' => 'int',
		'created_by' => 'int',
		'step_approval' => 'int'
	];

	protected $fillable = [
		'code',
		'company_id',
		'type_id',
		'account_group_id',
		'name',
		'is_plantation',
		'region_id',
		'city',
		'districts',
		'street',
		'phone_number',
		'email',
		'tax',
		'npwp',
		'nik',
		'created_by',
		'status',
		'step',
		'step_approval'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function type()
	{
		return $this->belongsTo(Type::class);
	}

	public function account_group()
	{
		return $this->belongsTo(AccountGroup::class);
	}

	public function region()
	{
		return $this->belongsTo(Region::class);
	}

	public function term_of_payment()
	{
		return $this->belongsTo(TermOfPayment::class);
	}

	public function payment_method()
	{
		return $this->belongsTo(PaymentMethod::class);
	}

	public function finance()
	{
		return $this->belongsTo(Finance::class);
	}

	public function currency()
	{
		return $this->belongsTo(Currency::class);
	}

	public function schema_group()
	{
		return $this->belongsTo(SchemaGroup::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function form_chats()
	{
		return $this->hasMany(FormChat::class);
	}

	public function form_documents()
	{
		return $this->hasMany(FormDocument::class);
	}

	public function documents()
	{
		return $this->belongsToMany(Document::class, 'form_setting_document')
					->withPivot('id', 'name', 'type', 'required', 'created_by', 'deleted_at')
					->withTimestamps();
	}
}
