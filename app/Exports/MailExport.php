<?php

namespace App\Exports;

use App\Models\Mails;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MailExport implements FromCollection,WithCustomCsvSettings, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ','
        ];
    }
    public function  __construct($campaign_id)
    {
        $this->campaign_id= $campaign_id;
    }

    public function headings(): array
    {
        return ["Name","Email"];
    }
    public function collection()
    {
        return Mails::select('name','email')->where('campaign_id', $this->campaign_id)->get();
    }
}
