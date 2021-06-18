<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
     public function sendSmsToMobile(Request $request) {

          $basic  = new \Nexmo\Client\Credentials\Basic('Nexmo API Key', 'Nexmo API Secret');
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '03244412055',
            'from' => 'Vonage SMS API',
            'text' => 'SMS notification sent using Vonage SMS API'
        ]);
 
        dd('SMS has sent.');
    }





































    //     //  return $request->all();
    //      $message = $request->input('message');
    //      $phone   = $request->input('phone');
    //      $encodeMessage = urlencode($message);
    //      $authkey = '';
    //      $senderId = '';
    //      $route = 4;
    //      $postdata = $request->all();
    //     //  print_r($phone);
    //     //  exit();
    //      $mobileNumber = implode('', $postdata['phone']);
    //      $arr = str_split($mobileNumber, '11');
    //      $phone = implode("," , $arr);
    //     //  print_r($phone);
    //     //  exit();

    //     $data = array(
    //         'authkey' => $authkey,
    //          'phone' => $phone,
    //          'message' => $encodeMessage,
    //          'sender' => $senderId,
    //          'route' => $route,
    //     );
    //     $url = "";
    //     $ch = curl_init();
    //     curl_setopt_array($ch, array(
    //         CURLOPT_URL =>$url,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_POST => true,
    //         CURLOPT_POSTFIELDS =>$postdata,

    //     ));
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    //     $output = curl_exec($ch);

    //     if(curl_error($ch))
    //     {
    //         echo 'error:' . curl_error($ch);
    //     }
    //     curl_close($ch);
    //     return redirect('/')->with('response', 'Message sent Successfully');
    //  }
}
