<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function view()
    {
        $transactions= Transaction::all();

        return view('admin/view')->with('transactions', $transactions);
    }
     public function edit(Request $request,$id)
    {
    	
        $transactions=Transaction::findorfail($id);
        return view('admin/edit')->with('transactions', $transactions);

    }
     public function update(Request $request, $id)
    {
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
        return redirect('admin/view');
    }

     public function destroy(Request $request, $id)
    {
        $transactions=Transaction::findorfail($id)->delete();
        return redirect('/view')->with('status', "Record Updated Successfully");

       


}

}
