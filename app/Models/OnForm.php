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
 * Class OnForm
 * 
 * @property int $id
 * @property int $jenis_id
 * @property int $akun_id
 * @property int $user_id
 * @property int $pembelian_id
 * @property string $nama_vendor
 * @property int $ketentuan_id
 * @property string $alamat1
 * @property string $alamat2
 * @property string $kode_pos
 * @property int $provinsi_id
 * @property string|null $no_hp
 * @property string|null $email
 * @property string|null $pajak
 * @property int $ketentuan_pembayaran_id
 * @property int $metode_pembayaran_id
 * @property int $mata_uang_id
 * @property int $skema_vendor_id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Jenis $jenis
 * @property SkemaVendor $skema_vendor
 * @property Akun $akun
 * @property User $user
 * @property Pembelian $pembelian
 * @property Ketentuan $ketentuan
 * @property Provinsi $provinsi
 * @property KetentuanPembayaran $ketentuan_pembayaran
 * @property MetodePembayaran $metode_pembayaran
 * @property MataUang $mata_uang
 * @property Collection|OnFormDetail[] $on_form_details
 * @property Collection|Status[] $statuses
 *
 * @package App\Models
 */
class OnForm extends Model
{
	use SoftDeletes;
	protected $table = 'on_form';

	protected $casts = [
		'jenis_id' => 'int',
		'akun_id' => 'int',
		'user_id' => 'int',
		'pembelian_id' => 'int',
		'ketentuan_id' => 'int',
		'provinsi_id' => 'int',
		'ketentuan_pembayaran_id' => 'int',
		'metode_pembayaran_id' => 'int',
		'mata_uang_id' => 'int',
		'skema_vendor_id' => 'int'
	];

	protected $fillable = [
		'jenis_id',
		'akun_id',
		'user_id',
		'pembelian_id',
		'nama_vendor',
		'ketentuan_id',
		'alamat1',
		'alamat2',
		'kode_pos',
		'provinsi_id',
		'no_hp',
		'email',
		'pajak',
		'ketentuan_pembayaran_id',
		'metode_pembayaran_id',
		'mata_uang_id',
		'skema_vendor_id'
	];

	public function jenis()
	{
		return $this->belongsTo(Jenis::class, 'jenis_id');
	}

	public function skema_vendor()
	{
		return $this->belongsTo(SkemaVendor::class);
	}

	public function akun()
	{
		return $this->belongsTo(Akun::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function pembelian()
	{
		return $this->belongsTo(Pembelian::class);
	}

	public function ketentuan()
	{
		return $this->belongsTo(Ketentuan::class);
	}

	public function provinsi()
	{
		return $this->belongsTo(Provinsi::class);
	}

	public function ketentuan_pembayaran()
	{
		return $this->belongsTo(KetentuanPembayaran::class);
	}

	public function metode_pembayaran()
	{
		return $this->belongsTo(MetodePembayaran::class);
	}

	public function mata_uang()
	{
		return $this->belongsTo(MataUang::class);
	}

	public function on_form_details()
	{
		return $this->hasMany(OnFormDetail::class, 'form_id');
	}

	public function statuses()
	{
		return $this->belongsToMany(Status::class, 'on_form_status', 'form_id')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}
}
