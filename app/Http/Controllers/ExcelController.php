<?php
namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Bulkemail;
use Exception;
use Session;
use Auth;
use Illuminate\Http\Request;
use App\Exports\TransactionsExport;
use App\Imports\TransactionsImport;
use App\Imports\BulkemailImport;
use Maatwebsite\Excel\Facades\Excel;
// use Maatwebsite\Excel\Concerns\SkipsOnFailure;
// use Maatwebsite\Excel\Concerns\SkipsFailures;
use Illuminate\Validation\Rule;
use DB;

class ExcelController extends Controller
{
    public function importExportView()

    {
       
       return view('excel.index');
    }
    //
    public function exportExcel($type)
    {
        return \Excel::download(new TransactionsExport, 'transactions.'.$type);
    }

             public function importExcel(Request $request) {
                 // $user_id = auth()->user()->id;       
                 
                 Excel::import(new TransactionsImport, request()->file('import_file'));
                  // return collect(head($data))
                  //       ->each(function ($row, $key) {
                  //       DB::table('transactions')
                  //       ->where('email', $row['email'])
                  //       ->update(array_except($row, ['email']));
        //});


                 Session::put('success',  'Your file is imported successfully in database.');
                 return back();
    }


     public function Bulkemailimport(Request $request) {
        // $user_id = auth()->user()->id;        
        Excel::import(new BulkemailImport, request()->file('import_file'));

        Session::put('success',  'Your file is imported successfully in database.');
        return back();
}

    //  public function importExcel(Request $request)
    //  {
    //                  $transactions=Auth::user()->userid;
    //                   Excel::import(new TransactionsImport,$request->import_file);
    //                    Session::put('success',  'Your file is imported successfully in database.');
    //         return back();
    //       }   

   
    public function phonebookview(Request $request)
             {
                    $transactions= Transaction::orderBy('id','DESC')->get();
                   return $transactions;
                    }



  // Api Phone Book through Postman params
    public function phonebook(Request $request){
                 $transactions = new Transaction;
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

    // Excel file Api through body Form Data
    public function importExcelApi(Request $request)
    {

        try {
            $import = new TransactionsImport();
            $import->import($request->file('import_file'));
            $failure=$import->failures()->first();
            if ($failure){

                return response()->json([
                    'status'=>400,
                    'message' => 'Some field are not correct.',
                ], 400);
            }
            else{

               // Excel::import(new TransactionsImport,request()->file('import_file'));
                return response()->json([
                    'status'=>200,
                     'message' => 'Data Iserted successfully.',
                ], 200);
            }

        } catch (Exception $e) {
            return response()->json($e->getMessage(),400);
        }
    }


 }

