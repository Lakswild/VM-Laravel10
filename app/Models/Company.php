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
 * Class Company
 * 
 * @property int $id
 * @property int $type_id
 * @property string $code
 * @property string $name
 * @property int $integrated_sap
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|AccountGroup[] $account_groups
 * @property Collection|Approval[] $approvals
 * @property Collection|Country[] $countries
 * @property Collection|Finance[] $finances
 * @property Collection|Form[] $forms
 * @property Collection|PaymentMethod[] $payment_methods
 * @property Collection|Purchasing[] $purchasings
 * @property Collection|SchemaGroup[] $schema_groups
 * @property Collection|SettingDocument[] $setting_documents
 * @property Collection|TermOfPayment[] $term_of_payments
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Company extends Model
{
	use SoftDeletes;
	protected $table = 'company';

	protected $casts = [
		'type_id' => 'int',
		'integrated_sap' => 'int'
	];

	protected $fillable = [
		'type_id',
		'code',
		'name',
		'integrated_sap'
	];

	public function account_groups()
	{
		return $this->hasMany(AccountGroup::class);
	}

	public function approvals()
	{
		return $this->hasMany(Approval::class);
	}

	public function countries()
	{
		return $this->hasMany(Country::class);
	}

	public function finances()
	{
		return $this->hasMany(Finance::class);
	}

	public function forms()
	{
		return $this->hasMany(Form::class);
	}

	public function payment_methods()
	{
		return $this->hasMany(PaymentMethod::class);
	}

	public function purchasings()
	{
		return $this->hasMany(Purchasing::class);
	}

	public function schema_groups()
	{
		return $this->hasMany(SchemaGroup::class);
	}

	public function setting_documents()
	{
		return $this->hasMany(SettingDocument::class);
	}

	public function term_of_payments()
	{
		return $this->hasMany(TermOfPayment::class);
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
