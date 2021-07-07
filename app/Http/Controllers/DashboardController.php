<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller 
   {
    public function dashboards(){
       $transactions= Transaction::all();

        return view('admin/dashboard')->with('transactions', $transactions);
    }

    public function add_client(){

        return view('admin/add_client');
    }
    public function store(Request $request){

        $transactions= new Transaction;
        $transactions->first_name     =    $request->first_name;
        $transactions->last_name      =    $request->last_name;
        $transactions->company        =    $request->company;
        $transactions->website        =    $request->website;
        $transactions->address        =    $request->address;
        $transactions->city           =    $request->city;
        $transactions->zip            =    $request->zip;
        $transactions->country        =    $request->country;
        $transactions->number         =    $request->number;
        $transactions->email          =    $request->email;
        $transactions->group          =    $request->group;
        $transactions->email_access   =    $request->email_access;
        $transactions->sms_access     =    $request->sms_access;
        $transactions->email_gateway  =    $request->email_gateway;
        $transactions->sms_gateway    =    $request->sms_gateway;
        $transactions->user_id        =    $request->user_id;
        $transactions->save();
        return redirect()->back();

    }

    public function all_client()
    {

        $transactions= Transaction::all();
        return view('admin/all_client')->with('transactions', $transactions);
    }

    public function edit_client( $id)
    {
       
        $transactions = Transaction::where('id',$id)->first();
        return view('admin/edit_client',compact('transactions'));
    }
    public function import_client(){

        return view('admin/import_client');
    }

    public function update_client(Request $request)
    {

        // return $request->all();
        $id = $request->id;
        // echo $id;
        // die();
        $transactions = Transaction::where('id',$id)->first();
      //  dd($transactions);
        $transactions->first_name     =    $request->first_name;
        $transactions->last_name      =    $request->last_name;
        $transactions->company        =    $request->company;
        $transactions->website        =    $request->website;
        $transactions->address        =    $request->address;
        $transactions->city           =    $request->city;
        $transactions->zip            =    $request->zip;
        $transactions->country        =    $request->country;
        $transactions->number         =    $request->number;
        $transactions->email          =    $request->email;
        $transactions->group          =    $request->group;
        $transactions->email_access   =    $request->email_access;
        $transactions->sms_access     =    $request->sms_access;
        $transactions->email_gateway  =    $request->email_gateway;
        $transactions->sms_gateway    =    $request->sms_gateway;
        $transactions->save();
        return redirect('all_client');
    }

    public function destroy($id){
        
    $transactions = Transaction::where('id',$id)->first();
    $transactions->delete();
    return redirect()->back();
    }
    public function add_group() {

             return view('admin/add_group');
    }

     public function store_group(Request $request) {
        // return $request->all();
        $client_group = new Dashboard;
    
        $client_group->group     =    $request->group;
        $client_group->save();
        return redirect('all_group');

             // return view('admin/add_group');
    }

         public function all_group()
    {

        $client_group  = Dashboard::all();
        
        
        return view('admin/all_group')->with('client_group', $client_group);
    }


     public function edit_group($id)
    {
        

        $client_group = Dashboard::where('id',$id)->first();
        return view('admin/edit_group',compact('client_group'));
    }
    
     public function update_group(Request $request) 
    {

        $id = $request->id;
        $client_group  = Dashboard::where('id',$id)->first();
        $client_group->group     =    $request->group;
        $client_group->save();
        return redirect('all_group');
    }

     public function delete($id)
    {
        
        $client_group = Dashboard::where('id',$id)->first();
        $client_group->delete();
        return redirect()->back();
    }

    public function group_client($id){
        $clients = Transaction::where('group',$id)->get();
        return view('admin/group_client')->with(compact('clients'));

    }

     public function edit_group_client($id)
    {
       
        $clients = Transaction::where('id',$id)->first();
        return view('admin/edit_group_client')->with(compact('clients'));
    }

    public function update_group_client(Request $request)
    {

        // return $request->all();
        $id = $request->id;
        // echo $id;
        // die();
        $clients = Transaction::where('id',$id)->first();
      //  dd($transactions);
        $clients->first_name     =    $request->first_name;
        $clients->last_name      =    $request->last_name;
        $clients->company        =    $request->company;
        $clients->website        =    $request->website;
        $clients->address        =    $request->address;
        $clients->city           =    $request->city;
        $clients->zip            =    $request->zip;
        $clients->country        =    $request->country;
        $clients->number         =    $request->number;
        $clients->email          =    $request->email;
        $clients->group          =    $request->group;
        $clients->email_access   =    $request->email_access;
        $clients->sms_access     =    $request->sms_access;
        $clients->email_gateway  =    $request->email_gateway;
        $clients->sms_gateway    =    $request->sms_gateway;
        $clients->save();
        return redirect('group_client/{id}');
    }

     public function client_group_delete($id)
    {
        // echo $id;
        // die();
        
        $clients = Transaction::where('id',$id)->first();
        $clients->delete();
        return redirect()->back();
    }


    //Bulk Email 

    public function send_bulkemail(){
      

        return view('admin/send_bulkemail');
    }

     public function send_emailfile(){
      

        return view('admin/send_emailfile');
    }
     public function email_history(){
      

        return view('admin/email_history');
    }
    
    
}