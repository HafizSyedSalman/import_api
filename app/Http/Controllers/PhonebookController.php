<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Exception;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class PhonebookController extends Controller
{
    public function add_contact(Request $request) {
        $transactions= new Transaction;
        $transactions->first_name     =    $request->first_name;
        $transactions->last_name      =    $request->last_name;
        $transactions->job_title      =    $request->job_title;
        $transactions->company        =    $request->company;
        $transactions->industry       =    $request->industry;
        $transactions->website        =    $request->website;
        $transactions->number         =    $request->number;
        $transactions->email          =    $request->email;
        $transactions->address        =    $request->address;
        $transactions->postalcode     =    $request->postalcode;
        $transactions->zip            =    $request->zip;
        $transactions->city           =    $request->city;
        $transactions->group          =    $request->group;
        $transactions->province       =    $request->province;
        $transactions->country        =    $request->country;
        $transactions->description    =    $request->description;
        $transactions->email_access   =    $request->email_access;
        $transactions->sms_access     =    $request->sms_access;
        $transactions->email_gateway  =    $request->email_gateway;
        $transactions->sms_gateway    =    $request->sms_gateway;
        
        $result = $transactions->save();
        if ($result){
            
            return response()->json([
                'status'=>200,
                 'message' => 'Data Iserted successfully.',
            ], 200);
            
        }
        else{
            return response()->json([
                'status'=>400,
                'message' => 'Some field are not correct.',
            ], 400);
           
        }

    }
}
