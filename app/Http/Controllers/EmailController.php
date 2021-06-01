<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Email;
class EmailController extends Controller
{
    public function importGoogleEmail(Request $request)
    {
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
            // $result = json_decode($googleService->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);
            $result = $googleService->request('https://www.googleapis.com/oauth2/v1/userinfo');
            
            //$email = new Email;
            //$email->given_name  = $result;
            //$email->save();



            // Going through the array to clear it and create a new clean array with only the email addresses
            $emails = []; // initialize the new array
            foreach ($result['feed']['entry'] as $contact) {
                if (isset($contact['gd$email'])) { // Sometimes, a contact doesn't have email address
                    $emails[] = $contact['gd$email'][0]['address'];
                }
            }
            
            return $emails->id;

            $email = new Email;
            $email->id  = $emails->id;
            
            return $emails;
    
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