<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PaymentMethod
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
 *
 * @package App\Models
 */
class PaymentMethod extends Model
{
	use SoftDeletes;
	protected $table = 'payment_method';

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
}
