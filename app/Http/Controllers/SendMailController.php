<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class SendMailController extends Controller
{     
    public function index()
    {
        $users = User::all();
        return view('mail/user_mail', ['users'=>$users]);
    }


    public function send_mail(Request $request)
    {
    	$details = [
    		'subject' => 'ZamStudios'
    	];
    	
        $job = (new \App\Jobs\SendQueueEmail($details))
            	->delay(now()->addSeconds(5)); 

        dispatch($job);
        return view('mail.notification');
        //echo "Mail send successfully !!";
    }
    public function notification() {
        return view('notification');
    }
}
