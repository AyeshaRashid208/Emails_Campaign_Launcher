<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\CredentialController;

use App\Http\Controllers\EmailAccountController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecieveMailController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('emails', EmailController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('unibox', RecieveMailController::class);
    Route::post('profile', [ProfileController::class, 'create'])->name('profile.create');
    Route::post('/update_profile', [ProfileController::class, 'update']);
    Route::get('/edit_profile', [ProfileController::class, 'edit']);
    Route::get('getmessage', [RecieveMailController::class, 'rec']);
   //campaign
    Route::resource('campaigns', CampaignController::class);

    Route::post('campaign_create', [CampaignController::class, 'create'])->name('campaign.create');
    Route::get('leads/{id}', [CampaignController::class, 'leads']);
    Route::post('addleads', [CampaignController::class, 'addleads']);
    Route::get('seq/{id}', [CampaignController::class, 'sequence']);
    Route::post('/file-import', [CampaignController::class, 'fileImport']);
    Route::post('/file-export', [CampaignController::class, 'fileExport']);
    Route::get('options/{id}', [CampaignController::class, 'options']);
    Route::post('/addmail', [CampaignController::class, 'addMail']);
    Route::get('schedule/{id}', [CampaignController::class, 'schedule']);
    Route::post('/send_mail', [CampaignController::class, 'sendMail']);
    Route::get('editMail/{id}', [CampaignController::class, 'editMail']);
    Route::get('delete/{id}', [CampaignController::class, 'deleteCampaign']);
    Route::post('campaign', [CampaignController::class, 'delete'])->name('campaign.delete');
    Route::post('/save', [CampaignController::class, 'saveSchedule']);
    Route::post('/storemail', [CampaignController::class, 'storemail']);
    Route::post('/update_mail', [CampaignController::class, 'update']);
    Route::post('/savemail', [CredentialController::class, 'save']);
    
    Route::post('emails', [EmailController::class, 'destroy'])->name('emails.destroy');
    Route::resource('staff', StaffController::class);
    Route::get('form', [HomeController::class, 'showForm'])->name('form');
    Route::get('about', [HomeController::class, 'about'])->name('about');
    Route::get('contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('form', [HomeController::class, 'submitForm'])->name('submit.form');

   
    Route::get('subscribe', [SubscriptionController::class, 'showSubscription'])->name('subscribe');
    Route::post('subscribe', [SubscriptionController::class, 'processSubscription'])->name('process.subscription');
    Route::get('subscribed/users', [SubscriptionController::class, 'subscribedUsers'])->name('subscribed.users');
	// To Manage Emails Accounts 
	 Route::match(['get','post'],'/email-account-create',[EmailAccountController::class,'emailAccount'])->name('emailAccounts.email-account-create');
	 Route::match(['get','post'],'/create-account',[EmailAccountController::class,'connect1'])->name('emailAccounts.email-account1');
	 Route::match(['get','post'],'/create-account-imap',[EmailAccountController::class,'connect2'])->name('emailAccounts.email-account2');
	 Route::match(['get','post'],'/create-account-security',[EmailAccountController::class,'connect3'])->name('emailAccounts.email-account3');
	 Route::match(['get','post'],'/connect-account',[EmailAccountController::class,'connect4'])->name('emailAccounts.email-account4');
	 Route::match(['get','post'],'/warmup-setting',[EmailAccountController::class,'warmupsetting'])->name('emailAccounts.warmup-setting');



});