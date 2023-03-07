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
            'ID',
            'First Name',
            'Last Name',
            'Alias/Emcee Name',
            'Reppin',
            'Division',
            'Birthday',
            'Address',
            'E-mail Address',
            'Facebook Account',
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
