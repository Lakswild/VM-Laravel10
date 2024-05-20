<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $no
 * @property int $level
 * @property int|null $company_id
 * 
 * @property Company|null $company
 * @property Collection|Approval[] $approvals
 * @property Collection|Form[] $forms
 * @property Collection|FormChat[] $form_chats
 * @property Collection|FormDocument[] $form_documents
 * @property Collection|FormSettingDocument[] $form_setting_documents
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable;
	
	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'level' => 'int',
		'company_id' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
		'no',
		'level',
		'company_id'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function approvals()
	{
		return $this->hasMany(Approval::class);
	}

	public function forms()
	{
		return $this->hasMany(Form::class, 'created_by');
	}

	public function form_chats()
	{
		return $this->hasMany(FormChat::class, 'from');
	}

	public function form_documents()
	{
		return $this->hasMany(FormDocument::class, 'created_by');
	}

	public function form_setting_documents()
	{
		return $this->hasMany(FormSettingDocument::class, 'created_by');
	}
}
