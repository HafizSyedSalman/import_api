<?php

namespace App\Imports;
use Auth;
use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Illuminate\Validation\Rule;

class TransactionsImport implements ToModel,WithValidation,SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function rules(): array
{
    return [
        'number' => Rule::unique('transactions', 'number'), // Table name, field in your db
        'email' => Rule::unique('transactions', 'email'),
    ];
}

public function customValidationMessages()
{
    return [
        'number.unique' => 'Number is Already Exist',
        'email.unique' => 'Number is Already Exist',
    ];
}
// End Unique code


    public function model(array $row)
    {
        return new Transaction([
            'first_name'    => $row[0],
            'last_name'    => $row[1],
            'job_title'    => $row[2],
            'company'    => $row[3],
            'industry'    => $row[4],
            'website'    => $row[5],
            'number'    => $row[6],
            'email'    => $row[7],
            'address'    => $row[8],
            'postalcode'    => $row[9],
            'zip'    => $row[10],
            'city'    => $row[11],
            'group'    => $row[12],
            'province'    => $row[13],
            'country'    => $row[14],
            'description'    => $row[15],
            'email_access'    => $row[16],
            'sms_access'    => $row[17],
            'email_gateway'    => $row[18],
            'sms_gateway'    => $row[19],
           
            
        ]);
    }
}