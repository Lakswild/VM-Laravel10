<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PihakPembayaran
 * 
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class PihakPembayaran extends Model
{
	use SoftDeletes;
	protected $table = 'pihak_pembayaran';

	protected $fillable = [
		'kode',
		'nama'
	];
}
