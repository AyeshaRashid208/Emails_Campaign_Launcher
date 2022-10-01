<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warmup extends Model
{
	protected $fillable=[
		'email_account_id',												
		'sender_first_name',
		'sender_last_name',
		'daily_compaign_limit',
		'custom_tracking_domain',
		'w_basic_setting_increase_per_day',
		'w_basic_setting_disable_slow_warmup',
		'w_basic_setting_daily_limit',
		'w_basic_setting_reply_rate',
		'w_basic_setting_monitor_blacklists',
		'w_advance_read_emulation',
		'w_advance_custom_tracking_domain',
		'w_advance_rendom_email_range_from',
		'w_advance_rendom_email_range_to',
		'show_more_open_rate',
		'show_more_spam_protection',
		'show_more_mark_important',
	];
    use HasFactory;
}
