<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'schedules';
    protected $fillable =[
        'start_time',
        'end_time',
        'days',  
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
        'sunday',
        'campaign_id',
    ];
}
