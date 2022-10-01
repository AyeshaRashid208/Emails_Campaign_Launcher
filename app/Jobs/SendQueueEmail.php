<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Mails;
use App\Mail\TestEmail;
use App\Models\Campaign;
use Mail;

class SendQueueEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    public $det;
    public $timeout = 7200;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $id = $this->details['campaign_id'];
        $data = Mails::where('campaign_id',$id)->get();    
        $input['subject'] = $this->details['subject'];
        $input['body'] = $this->details['body'];
        $det =$this->details['body'];
            
        foreach($data as $value) {
         
            $email = $value->email;
            $subject = $this->details['subject'];
            $det =$this->details['body'];
          
            Mail::send('campaigns.mail',[], function ($message) use ($email,$subject) {
               
                $message->to($email)
                ->subject($subject);              
            });
                     
        }

    }
}
