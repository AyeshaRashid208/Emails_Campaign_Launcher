<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'credentials';
    protected $fillable =[
        'name',
        'email',
        'password',
        'user_id',
       
    ];
}
