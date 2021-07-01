<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class TransactionsExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transaction::all();
    }
    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'job title',
            'Company',
            'Industry',
            'Website',
            'Number',
            'Email',
            'Address',
            'Postalcode',
            'Zip',
            'City',
            'Group',
            'Province',
            'country',
            'Description',
            'Email_access',
            'Sms_access',
            'Email_gateway',
            'Sms_gateway',
        ];
    }
    public function map($transaction): array
    {
        return [
            $transaction->first_name,
            $transaction->last_name,
            $transaction->job_title,
            $transaction->company,
            $transaction->industry,
            $transaction->website,
            $transaction->number,
            $transaction->email,
            $transaction->address,
            $transaction->postalcode,
            $transaction->zip,
            $transaction->city,
            $transaction->group,
            $transaction->province,
            $transaction->country,
            $transaction->description,
            $transaction->email_access,
            $transaction->sms_access,
            $transaction->email_gateway,
            $transaction->sms_gateway,
        ];
    }
}
