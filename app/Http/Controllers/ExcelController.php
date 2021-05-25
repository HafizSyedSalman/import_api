<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Exception;
use Session;
use Illuminate\Http\Request;
use App\Exports\TransactionsExport;
use App\Imports\TransactionsImport;
use Maatwebsite\Excel\Facades\Excel;
//use Maatwebsite\Excel\Concerns\SkipsOnFailure;
//use Maatwebsite\Excel\Concerns\SkipsFailures;
use Illuminate\Validation\Rule;

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

     public function importExcel(Request $request)
     {



        Excel::import(new TransactionsImport,$request->import_file);
    

       Session::put('success',  'Your file is imported successfully in database.');

      return back();
    }
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

