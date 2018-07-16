<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

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

        $schedule->call(function(){
            verificaEmailsEstagiarios();
        })->everyMinute();

        // php /home/vagrant/code/estagiarios/artisan schedule:run >> /dev/null 2>&1

        $schedule->exec("mysqldump -h 127.0.0.1 -uhomestead -psecret estagiarios")
            ->everyMinute()
            ->sendOutputTo(storage_path('backups/estagiarios_backup'.date('dmY').'.sql'));
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
