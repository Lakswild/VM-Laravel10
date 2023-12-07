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
 * Class TipeInput
 * 
 * @property int $id
 * @property string $nama
 * @property string|null $dengan_teks
 * @property string|null $dengan_dokumen
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|FormDetail[] $form_details
 * @property Collection|OnFormDetail[] $on_form_details
 *
 * @package App\Models
 */
class TipeInput extends Model
{
	use SoftDeletes;
	protected $table = 'tipe_input';

	protected $fillable = [
		'nama',
		'dengan_teks',
		'dengan_dokumen'
	];

	public function form_details()
	{
		return $this->hasMany(FormDetail::class);
	}

	public function on_form_details()
	{
		return $this->hasMany(OnFormDetail::class);
	}
}
