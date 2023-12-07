<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OnFormDetail
 * 
 * @property int $id
 * @property int $form_id
 * @property int $tipe_input_id
 * @property string $nama
 * @property string|null $teks
 * @property string|null $dokumen
 * @property string|null $valid
 * @property int|null $status_id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property OnForm $on_form
 * @property TipeInput $tipe_input
 * @property Status|null $status
 *
 * @package App\Models
 */
class OnFormDetail extends Model
{
	use SoftDeletes;
	protected $table = 'on_form_detail';

	protected $casts = [
		'form_id' => 'int',
		'tipe_input_id' => 'int',
		'status_id' => 'int'
	];

	protected $fillable = [
		'form_id',
		'tipe_input_id',
		'nama',
		'teks',
		'dokumen',
		'valid',
		'status_id'
	];

	public function on_form()
	{
		return $this->belongsTo(OnForm::class, 'form_id');
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
