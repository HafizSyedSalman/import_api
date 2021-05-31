<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Exception;
use Session;
use App\Exports\TransactionsExport;
use App\Imports\TransactionsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function importGoogleContact(Request $request)
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
            $result = json_decode($googleService->request('https://www.google.com/m8/feeds/contacts/default/full?alt=json&amp;max-results=400'), true);
    
            // Going through the array to clear it and create a new clean array with only the email addresses
            $emails = []; // initialize the new array
            foreach ($result['feed']['entry'] as $contact) {
                if (isset($contact['gd$email'])) { // Sometimes, a contact doesn't have email address
                    $emails[] = $contact['gd$email'][0]['address'];
                }
            }
            
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
