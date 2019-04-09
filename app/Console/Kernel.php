<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Http\Controllers\LogController;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $command_one = "cd C:/users/alvydas/catalog/laravel/catalog/storage/logs";
        $command_two = "compress-archive *.* laravel-log.zip -force";
        var_dump($command_one);
        die();
        $schedule->exec($command_one . " && " . $command_two)->everyMinute();
        // $schedule->exec(cd "C:\users\alvydas\catalog\laravel\catalog\storage\logs" && compress-archive "*.* laravel-log.zip -force")->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
