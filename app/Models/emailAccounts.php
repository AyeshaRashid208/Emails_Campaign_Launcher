<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emailAccounts extends Model
{
	protected $fillable = [
		// 'id',
		'firstName',
		'lastName',
		'email_name',
		'password'
	];
    use HasFactory;
}
