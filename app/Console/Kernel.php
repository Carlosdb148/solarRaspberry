<?php

namespace App\Console;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->call(function() {            
        //     $fetched = Http::asForm()->post("http://192.168.108.137:3000/execute", ['command' => 'getData']);
        //     $data = $fetched->body();
        //     $logs = DB::insert('insert into historical_logs 
        //     (ejex, ejey, bateria, ldr1, ldr2, ldr3, ldr4)
        //     values (:ejex, :ejey, :bateria, :ldr1, :ldr2, :ldr3, :ldr4)', 
        //     ['ejex' => $data->ejex, 'ejey' => $data->ejey, 'bateria' => $data->bateria, 
        //     'ldr1' => $data->ldr1,'ldr2' => $data->ldr2,
        //     'ldr3' => $data->ldr3, 'ldr4' => $data->ldr4]);
        // })->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
