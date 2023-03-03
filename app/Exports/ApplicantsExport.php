<?php

namespace App\Exports;

use App\Models\Applicant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ApplicantsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Applicant::all();
    }

    public function headings(): array
    {
        return [
            'Applicant ID',
            'First Name',
            'Last Name',
            'Emcee Name/Alias',
            'Reppin',
            'Division',
            'Birthday',
            'Hometown',
            'E-mail Address',
            'Facebook Acct',
            'Cellphone No.',
            '16 Bars (Song)',
            '16 Bars (Battle)',
            'Link (Song)',
            'Link (Battle)',
            'Link (Others)',
            'Status',
            'Created At',
            'Updated At',
        ];

    }
}
