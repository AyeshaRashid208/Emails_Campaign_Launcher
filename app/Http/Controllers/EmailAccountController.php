<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emailAccounts;
use App\Models\warmup;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailAccountController extends Controller
{
	//................................create Email account............................//
	public function emailAccount()
	{
		if(request()->has('delete')){
			// dd('delete');
			$id = request('delete');
			$emailac= emailAccounts::destroy($id);
			return redirect(url('/').'/email-account-create')->with(['type' => 'danger','msg' => 'Your Account Deleted Successfully']);
		}
		# code...
		$emailac = emailAccounts::get()->all();
		return view('emailAccounts.email-account',compact('emailac'));
	}

	//....................................choose email account with google
   public function connect1()
	{

		# code...
		return view('emailAccounts.email-account1');
	}

	//....................................................................................

   public function connect2()
	{
		# code...
		return view('emailAccounts.email-account2');
	}

	//....................................................................................
   public function connect3()
	{
		# code...
		return view('emailAccounts.email-account3');
	}
	//....................................................................................
   public function connect4()
	{
		
		if(request()->isMethod('post')){
			// dd(request()->all());
			if(request('email')== request('id')){
				
			}else{
				request()->validate([
					"email" => 'required|email|unique:email_accounts,email_name',
					"password" => 'required',
				]);
			}

			// dd(request()->all());
		// =============== [ Email ] ===================
		
				//Required Data
				$id = request('id');
				$sendTo = request('email');
				$firstName= request('firstName');
				$lastName= request('lastName');
				// $sendTo = 'arshadgoraya1122@gmail.com';
				$subject = 'Notify Mail !';
				$body = "Your Email is connected to website.";
				$isHTML = false;
	
				//Creating PHPMailer instance
				$mail = new PHPMailer();
				// Settings
				$mail->IsSMTP();
				$mail->CharSet = 'UTF-8';
				$mail->Host       = env('SMTP_HOST', "");
				$mail->SMTPDebug  = 0;
				$mail->SMTPAuth   = true;
				$mail->Port       = env('SMTP_PORT', "");
				$email=$mail->Username   = request('email');
				$password=$mail->Password   = request('password');
				// $email=$mail->Username   = 'arshadali.intractivesol@gmail.com';
				// $password=$mail->Password   = 'cudvnbuuwcnnbclx';
				$mail->setFrom(env('SMTP_USERNAME', ""), "Arshad Ali");
				$mail->addAddress($sendTo);
				$mail->SMTPSecure = 'tls';
	 
				// Content
				$mail->isHTML($isHTML);                   
				$mail->Subject = $subject;
				$mail->Body    = $body;
				 
				//send
				if( !$mail->send() ) {
					// dd('not send');
					
					 return redirect(url('/').'/connect-account')->with(['type' => 'danger','msg' => 'Sorry Not Connect']);
			
				}else {
					// dd('data inserted');
					$emailac = emailAccounts::updateOrCreate([
						'email_name' => $id
					],[
						'firstName' => $firstName,
						'lastName' => $lastName,
						'email_name' => $email,
						'password'		=>$password,
					]);
						return redirect(url('/').'/email-account-create')->with(['type' => 'success','msg' => 'Your Email Connected Successfully']);
					
				}
				
				// $mail->send();  
	
				// return "Mail sent";
		}			
	
		# code...
		return view('emailAccounts.email-account4');
	}

	//..........Warmup setting .........................................................

	public function warmupsetting()
	{
		if(request()->isMethod('post')){
			// request()->validate([

			// ])
			// dd(request()->all());

			$email_account_id	=request("email_account_id" );
			$sender_first_name		=request("firstName" );
			$sender_last_name		=request("lastName" );
			$daily_compaign_limit		=request("daily_compaign_limit" );
			$custom_tracking_domain		=request("custom_tracking_domain" );
			$w_basic_setting_increase_per_day			=request("increase_per_limit" );
			$w_basic_setting_disable_slow_warmup	=request("disable_slow_warmup" );
			$w_basic_setting_daily_limit			=request("daily_limit" );
			$w_basic_setting_reply_rate		=request("reply_rates" );
			$w_basic_setting_monitor_blacklists  		=request("blacklist" );
			$w_advance_read_emulation	=request("advance_read_emulation" );
			$w_advance_custom_tracking_domain	=request("advance_custom_tracking_domain" );
			$w_advance_rendom_email_range_from	=request("random_email_range" );
			$w_advance_rendom_email_range_to	=request("random_email_range_to" );
			$show_more_open_rate	=request("open_rate" );
			$show_more_spam_protection	=request("spam_protection" );
			$show_more_mark_important	=request("mark_important" );
			
			$warmup = warmup::updateOrCreate(
				['email_account_id' => $email_account_id],
				[
					'sender_first_name'=>$sender_first_name,
					'sender_last_name'=>$sender_last_name,
					'daily_compaign_limit'=>$daily_compaign_limit,
					'custom_tracking_domain'=>$custom_tracking_domain,
					'w_basic_setting_increase_per_day'=>$w_basic_setting_increase_per_day,
					'w_basic_setting_disable_slow_warmup'=>$w_basic_setting_disable_slow_warmup,
					'w_basic_setting_daily_limit'=>$w_basic_setting_daily_limit,
					'w_basic_setting_reply_rate'=>$w_basic_setting_reply_rate,
					'w_basic_setting_monitor_blacklists'=>$w_basic_setting_monitor_blacklists,
					'w_advance_read_emulation'=>$w_advance_read_emulation,
					'w_advance_custom_tracking_domain'=>$w_advance_custom_tracking_domain,
					'w_advance_rendom_email_range_from'=>$w_advance_rendom_email_range_from,
					'w_advance_rendom_email_range_to'=>30,
					'show_more_open_rate'=>$show_more_open_rate,
					'show_more_spam_protection'=>$show_more_spam_protection,
					'show_more_mark_important'=>$show_more_mark_important,
				]);
			return redirect(url('/').'/warmup-setting?warmup='.$email_account_id)->with(["type" => "success","msg" => "HomePage Settings updated successfully"]);
		}
		$warmup = warmup::where("id",1)->first();
		# code...
		return view('emailAccounts.email-account-warmup-setting');
	}
}
