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

        foreach($rows as $fields){
            fputcsv($csvFile, $fields);
        }

        fclose($csvFile);
        return true;
    }
}
