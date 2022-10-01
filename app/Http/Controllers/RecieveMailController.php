<?php

namespace App\Http\Controllers;

use App\Models\Credential;
use Illuminate\Http\Request;
// use Webklex\IMAP\Client;
use Webklex\IMAP\Facades\Client;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Facade;
use Auth;
class RecieveMailController extends Controller
{
    // public function index(){

    // }
    public function recieve()
    {
        $oClient = new Client([
            'host'          => 'imap.gmail.com',
            'port'          => 993,
            'encryption'    => 'ssl',
            'validate_cert' => true,
            'username'      => 'ayesharashid35201@gmail.com',
            'password'      => 'hhyzrbwtpbzxxxnn',
            'protocol'      => 'imap'
        ]);
        //Connect to the IMAP Server
        $oClient = Client::account('default');
        $oClient->connect();


        $aFolder = $oClient->getFolders();
        $oFolder = $oClient->getFolder('INBOX.read');
        // $aMessage = $oFolder->query()->all()->get();
        $aMessage = $oFolder->query()->from('rashidayesha208@gmail.com')->get();

        dd($aMessage);
    }

    public function index()
    {
        
        $user_id = Auth::user()->id; 
       $data = Credential::where('user_id', $user_id)->first();
       $email= $data->email;
    //    dd($email);
        /** @var \Webklex\PHPIMAP\Client $client */
        $client = Client::account('default');

        //Connect to the IMAP Server
        $client->connect();

        //Get all Mailboxes
        /** @var \Webklex\PHPIMAP\Support\FolderCollection $folders */
        $folders = $client->getFolders();
        $oFolder = $client->getFolder('INBOX');
        // $aMessage = $oFolder->query()->unseen()->get();
        // $aMessage = $oFolder->query()->since(Carbon::now()->subDays(30))->get();
        $aMessage = $oFolder->query()->from('bsef19m531@pucit.edu.pk')->get();
   
        dump(["Records" => $aMessage]); 
        
         /** @var \Webklex\PHPIMAP\Message $aMessage */     
        // dump(["Subject" => $aMessage]); 
        // $paginator = $oFolder->query()->from($email)->paginate();
        // // $paginator = $aMessage->paginate();
        // $paginator = $oFolder->search()
        //     ->from($email)->get()
        //     ->paginate($perPage = 5, $page = null, $pageName = 'emails.unibox');
                
        // $folder = $oClient->getFolder('INBOX');
        // $messages = $folder->query()->limit(2)->get();
        // dump(["with limit" => count($messages)]);
        // $oFolder = $client->getFolder('INBOX.read');
        // $aMessage = $oFolder->query()->from('rashidayesha208@gmail.com')->get();
     
        //Loop through every Mailbox
        /** @var \Webklex\PHPIMAP\Folder $folder */
        // foreach ($folders as $folder) {

        //     //Get all Messages of the current Mailbox $folder
        //     /** @var \Webklex\PHPIMAP\Support\MessageCollection $messages */
        //     $messages = $folder->messages()->all()->get();

        //     /** @var \Webklex\PHPIMAP\Message $message */
        //     foreach ($messages as $message) {
        //         echo $message->getSubject() . '<br />';
        //         echo 'Attachments: ' . $message->getAttachments()->count() . '<br />';
        //         echo $message->getHTMLBody();

        //         //Move the current Message to 'INBOX.read'
        //         if ($message->move('INBOX.read') == true) {
        //             echo 'Message has ben moved';
        //         } else {
        //             echo 'Message could not be moved';
        //         }
        //     }
        // }
    }
}
