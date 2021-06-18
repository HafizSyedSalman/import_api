<?php

namespace App\Http\Controllers;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function sendSms(Request $request){
$api_key = "923244412055-3d664109-6be0-4d74-af6b-7d42a18d69ca";///YOUR API KEY
$username="923244412055";
$password="ABCpakistan050";
$mobile = $request->mobile;///Recepient Mobile Number
$sender = "SenderID";
$message = $request->message;

////sending sms

$post = "&sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
$url = "https://bulksms.com.pk/api/sms.php?api_key=$api_key";
//return $url;
$ch = curl_init();
$timeout = 30; // set to zero for no timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result = curl_exec($ch); 
/*Print Responce*/
echo $result; 





        // Nexmo::message()->send([
        //     'to'   => '88', $request->mobile,
        //     'from' => '03244412055',
        //     'text' => 'Using the facade to send a message.'
        // ]);

        // Session::flash('success','SMS sent Successfully');
        // return redirect('/');
    }
}
