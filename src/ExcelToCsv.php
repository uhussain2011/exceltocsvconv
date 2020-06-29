<?php


namespace Tritility\ExcelToCsv;


use Illuminate\Console\Command;

class ExcelToCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     * generate('path', 'excel file name', 'csvfile name')
     */
    protected $signature = 'exceltocsv:generate {path : Give a file path where your excel.xlsx file is.} { excelFileName : give your excel file name without extension.} { csvFileName : Give your csv file name without extension.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates csv from excel. Takes a file path where your excel.xlsx file is at first param. Takes excel file name without extension at second param. Takes csv file name without extension at third param';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $path = $this->argument('path');
        $excelFileName = $this->argument('excelFileName');
        $csvFileName = $this->argument('csvFileName');
        GenerateExcelToCsv::generate($path, $excelFileName, $csvFileName);
        $this->info("$excelFileName file is generated as csv file at this location : $path");
    }
}
