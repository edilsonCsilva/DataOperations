<?php



namespace Edilson\Data;

class DataOperations
{
    public function DataNow($dataFormat='Y/m/d H:i:s')
    {
        return  date($dataFormat);
    }

     public function diffData($start_date_,$end_date_){
        $start_date = strtotime($start_date_); 
        $end_date = strtotime($end_date_); 
        $diff = abs($end_date - $start_date); 
        $years = floor($diff / (365*60*60*24)); 
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
        $minutes = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
        $seconds = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60)); 
        $data = [
            'start_date' => $start_date_,
            'end_date'  => $end_date_,
            'years' =>  $years,
            'months' =>  $months,
            'days' =>  $days,
            'hours' =>  $hours,
            'minutes' =>  $minutes,
            'seconds' =>  $seconds,
            'diff' =>  $diff,
            
        ];
        return $data;

    }

    public function DifferenceBetweenTwoDates($start_date,$end_date){
        $start_date = strtotime($start_date); 
        $end_date = strtotime($end_date); 
        return ($end_date - $start_date)/60/60/24;

    }

    


}



?>