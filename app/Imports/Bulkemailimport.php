<?php

namespace App\Imports;
use Auth;
use App\Models\Bulkemail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Validation\Rule;

class BulkemailImport implements ToModel,WithValidation,SkipsOnFailure
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
        'email' => Rule::unique('bulk_email', 'email'),
    ];
}

public function customValidationMessages()
{
    return [
        'email.unique' => 'Number is Already Exist',
    ];
}
// End Unique code

    public function model(array $row)
    {
        return new Bulkemail([
            'email'    => $row[0]
           
        ]);
    }
}
