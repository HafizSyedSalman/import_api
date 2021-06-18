<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Transaction;
use Auth;
class ContactController extends Controller
{

    use AuthenticatesUsers;

    public function importGoogleContact(Request $request)
    {

        // if (Auth::check()) {
        //     return "User logged , user_id : ".$user ;
        // }else{
        //     return "Not logged"; //It is returning this
        // }
    
        // get data from request
        $code = $request->code;
       
        // get google service
        $googleService = \OAuth::consumer('Google');
        
        // check if code is valid
    
        // if code is provided get user data and sign in
        if ( ! is_null($code)) {
            // This was a callback request from google, get the token
            $token = $googleService->requestAccessToken($code);
    
            // Send a request with it
             $result = json_decode($googleService->request('https://www.google.com/m8/feeds/contacts/default/full?alt=json&max-results=400'), true);
    
            // Going through the array to clear it and create a new clean array with only the email addresses
            $emails = []; // initialize the new array
           
            foreach ($result["feed"]['entry'] as $contact) {
                if (isset($contact['gd$phoneNumber'], $contact['title'])) {
                    $numbers = $contact['gd$phoneNumber'][0]['$t'];
                    $numbers= New Transaction;
                    $numbers->first_name = $contact['title']['$t'];
                    $numbers->number = $contact['gd$phoneNumber'][0]['$t'];
                    $numbers->save();
            
                }
            }
            return redirect('datatable');
                
        }
        
        // if not ask for permission first
        else {
            // get googleService authorization
            $url = $googleService->getAuthorizationUri();
    
            // return to google login url
            return redirect((string)$url);
        }
    
}

        
}
