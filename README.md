#Excel to CSV Converter

##Install

composer require tritility/exceltocsv

##Import namespace and the ExcelToCsv command class
###In your Kernel.php file in your consol directory of your main app like bellow

```
<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;
use Tritility\ExcelToCsv\ExcelToCsv;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
       ExcelToCsv::class 
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //
    }
}

```

##Generate excel to csv

php artisan exceltocsv:generate the_file_path_without_blank_space excelfile_name_without_white_space cs
i.e. php artisan exceltocsv:generate C:\Users\project\ orders newfile
