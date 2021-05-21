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
         $transactions->first_name = $request->input('first_name');
         $transactions->last_name = $request->input('last_name');
         $transactions->job_title= $request->input('job_title');
          $transactions->company= $request->input('company');
           $transactions->industry= $request->input('industry');
            $transactions->website= $request->input('website');
             $transactions->number= $request->input('email');
              $transactions->email= $request->input('email');
              $transactions->address= $request->input('address');
               $transactions->postalcode= $request->input('postalcode');
                $transactions->city= $request->input('city');
                 $transactions->province= $request->input('province');
                  $transactions->country= $request->input('country');
                   $transactions->description= $request->input('description');
                   
                   

        $transactions->update();
        return redirect('/view')->with('status', 'Data is Updated');
    }

     public function destroy(Request $request, $id)
    {
        $transactions=Transaction::findorfail($id)->delete();

       


}

}
