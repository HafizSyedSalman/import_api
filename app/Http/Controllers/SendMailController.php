<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use Mail;
use App\Models\Bulkemail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SendMailController extends Controller
{     
    public function index()
    {
        return view('mail/emailsetting');
    }

    public function sendEmailfile()
    {
        return view('mail/sendEmailfile');
    }

     public function bulkemailuser()
    {
        // $user= Auth::user();
        
        $bulkemail = Bulkemail::all();
        return view('mail/bulkemail', ['bulkemail'=>$bulkemail]);
    // }
    //     return view('mail/bulkemail');
    }
 
    public function sendEmailView()
    {
        return view('mail/sendEmail');
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

    public function sendEmail(Request $request)
    {
        $data =[
            'name'=>$request->name,
            'to'=>$request->to,
            'subject'=>$request->subject,
            'message'=>$request->message

        ];
        $email = 'to';
        \Mail::to($email)->send(new App\Mail\TestMail($data));
         echo "Mail send successfully !!";
    }



        // $input['name'] = $request->input('name');
        // $input['to'] = $request->input('to');
        // $input['subject'] = $request->input('subject');
        // $message = $request->input('message');

        // $path = base_path('Test_mail.blade.php');
        // file_put_contents($path, $message);

        // $data = array(
        //     'message' => $message,
        // );

        // \Mail::send('mail.Test_mail', $data, function($message) use($input) {
        //     $message->to($input['to'], $input['name'])->subject($input['subject']);
    
        // });
        // echo "Mail send successfully !!";
    


    public function notification() {
        return view('notification');
    }

    // public function updateSetting(Request $request) {
    //     // config(['database.connections.mysql.host' => '127.0.0.1']);
    //     $this->envUpdate('MAIL_MAILER', $request->input('APP_NAME'));
    //     $this->envUpdate('MAIL_HOST', $request->input('MAIL_HOST'));
    //     $this->envUpdate('MAIL_PORT', $request->input('MAIL_PORT'));
    //     $this->envUpdate('MAIL_USERNAME', $request->input('MAIL_USERNAME'));
    //     $this->envUpdate('MAIL_PASSWORD', $request->input('MAIL_PASSWORD'));
    //     $this->envUpdate('MAIL_ENCRYPTION', $request->input('MAIL_ENCRYPTION'));
    //     $this->envUpdate('MAIL_FROM_ADDRESS', $request->input('MAIL_FROM_ADDRESS'));
    //     $this->envUpdate('MAIL_FROM_NAME', $request->input('MAIL_FROM_NAME'));
    // }

    // public function sendEmailView() {
    //     return view('mail/sendEmail');
    // }

    // public static function envUpdate($key, $value)
    // {
    //     $path = base_path('.env');
    //     if (file_exists($path)) {
    //         file_put_contents($path, str_replace(
    //             $key . '=' . env($key), $key . '=' . $value, file_get_contents($path)
    //         ));
    //     }
    // }
    // protected function updateDotEnv($key, $newValue, $delim='')
    // {

    //     $path = base_path('.env');
    //     // get old value from current env
    //     $oldValue = env($key);

    //     // was there any change?
    //     if ($oldValue === $newValue) {
    //         return;
    //     }

    //     // rewrite file content with changed data
    //     if (file_exists($path)) {
    //         // replace current value with new value 
    //         file_put_contents(
    //             $path, str_replace(
    //                 $key.'='.$delim.$oldValue.$delim, 
    //                 $key.'='.$delim.$newValue.$delim, 
    //                 file_get_contents($path)
    //             )
    //         );
    //     }
    // }

    public function store(Request $request){

        foreach($request->setting as $name => $value ) {
            $setting = Setting::where(['name' => $name])->first();
	        if($setting) {
	            $setting->value = $value;
	            $setting->save();
	        } else {
	            $setting = new Setting;
	            $setting->name  = $name;
	            $setting->value = $value;
	            $setting->save();
	        }
        }
        return redirect()->back();
    }
}
