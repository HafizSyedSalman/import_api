<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Validator;

class BulkSmsController extends Controller
{
    public function sendSms( Request $request )
    {
       // Your Account SID and Auth Token from twilio.com/console
       $sid    = 'AC696db9f6f61d891b24be3cf5bf08349c';
       $token  = 'be696a1961ee114bf19739b174cbea86';
       $client = new Client( $sid, $token );
    
       $validator = Validator::make($request->all(), [
           'numbers' => 'required',
           'message' => 'required'
       ]);

       if ( $validator->passes() ) {

           $numbers_in_arrays = explode( ',' , $request->input( 'numbers' ) );

           $message = $request->input( 'message' );
           $count = 0;

           foreach( $numbers_in_arrays as $number )
           {
               $count++;

               $client->messages->create(
                   $number,
                   [
                       'from' => env( 'TWILIO_FROM' ),
                       'body' => $message,
                   ]
               );
           }

           return back()->with( 'success', $count . " messages sent!" );
              
       } else {
           return back()->withErrors( $validator );
       }
   }
}
