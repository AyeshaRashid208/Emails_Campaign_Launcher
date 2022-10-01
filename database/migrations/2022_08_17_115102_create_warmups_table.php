<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarmupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warmups', function (Blueprint $table) {
            $table->id();
				$table->string('email_account_id');
				$table->string('sender_first_name')->nullable();
				$table->string('sender_last_name')->nullable();
				$table->string('daily_compaign_limit')->default(0);
				$table->string('custom_tracking_domain')->nullable();
			  $table->integer('w_basic_setting_increase_per_day')->nullable();
			  $table->integer('w_basic_setting_disable_slow_warmup')->nullable();
			  $table->integer('w_basic_setting_daily_limit')->nullable();
			  $table->integer('w_basic_setting_reply_rate')->nullable();
				$table->string('w_basic_setting_monitor_blacklists')->nullable();
			  $table->integer('w_advance_read_emulation')->nullable();
			  $table->integer('w_advance_custom_tracking_domain')->nullable();
			  $table->integer('w_advance_rendom_email_range_from')->nullable();
			  $table->integer('w_advance_rendom_email_range_to')->nullable();
			  $table->integer('show_more_open_rate')->nullable();
			  $table->integer('show_more_spam_protection')->nullable();
			  $table->integer('show_more_mark_important')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warmups');
    }
}
