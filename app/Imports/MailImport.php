<?php

namespace App\Imports;

use App\Models\Mails;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class MailImport implements ToModel, WithHeadingRow, WithStartRow, WithCustomCsvSettings
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function startRow(): int
    {
        return 2;
    }

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
    public function model(array $row)
    {
        

         $rowCount =0;
         
        if(Mails::where('email',$row['email'])->where('campaign_id', $this->campaign_id)->count() == 0){
            
            $item= new Mails();
            
            if (filter_var($row['email'], FILTER_VALIDATE_EMAIL)){
                $item->campaign_id = $this->campaign_id;
                $item->email= $row['email'];
                $item->name= $row['name'];
                $item->save();
                
            }
            else{
                $item->delete();

            }
            $rowCount++;
                             
          }
        
        
          
       
    }
}
