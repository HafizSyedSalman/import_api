<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function view(){

        $transactions= Transaction::all();
        return view('admin/view')->with('transactions', $transactions);
    }

   public function  user_record($id) {
    $transactions= Transaction::findorfail($id);
    
    return view('admin/view')->with('transactions', $transactions);
    
    
   }
    public function datatable(){

        $transactions= Transaction::paginate(6);
        // ->orderBy('id','ASC')
        // ->get();
        return view('admin/datatable')->with('transactions', $transactions);
    }
     
    public function add_contact(Request $request) {
        $transactions= new Transaction;
        $transactions->user_id     =    $request->user_id;
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
        $transactions->city           =    $request->city;
        $transactions->province       =    $request->province;
        $transactions->country        =    $request->country;
        $transactions->description    =    $request->description;
        $transactions->save();
        return redirect()->back();

    }



    public function edit($id){
    	
        $transactions=Transaction::findorfail($id);
        return $transactions;

    }
    public function update(Request $request){
       
        $id = $request->id;
        $transactions = Transaction::findorfail($id);
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
        $transactions->city           =    $request->city;
        $transactions->province       =    $request->province;
        $transactions->country        =    $request->country;
        $transactions->description    =    $request->description;
        $transactions->update();
        return redirect()->back();
    }

    public function destroy($id){
    	
        $transactions=Transaction::findorfail($id);
        return $transactions;

    }
     public function delete(Request $request){
        $id = $request->id;
        $transactions=Transaction::findorfail($id);
        $transactions->delete();
        return redirect()->back();
    }

}
