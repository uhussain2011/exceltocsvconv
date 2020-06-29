<?php


namespace Tritility\ExcelToCsv;


class GenerateExcelToCsv
{
    public static function generate($path, $excelFilePath, $csvFilePath)
    {
        $excelPath = $path . '/'. $excelFilePath. '.xlsx';
        $csvPath = $path . '/' . $csvFilePath. '.csv';
        $_excel = new ExcelToArray($excelPath);
        $rows = $_excel->rows();
        $csvFile = fopen($csvPath, 'w');
        $counter = 0;
        foreach($rows as $fields){
            if($counter == 0){
                $fields = str_replace(' ', '_', $fields);
                $counter +=1;
            }
            $fields = array_map('strtolower', $fields);
            fputcsv($csvFile, $fields);
        }

        fclose($csvFile);
        return true;
    }
}
