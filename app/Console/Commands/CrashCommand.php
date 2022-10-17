<?php

namespace App\Console\Commands;

use App\Jobs\MyCrashJob;
use Illuminate\Console\Command;
use App\MyCrashingService;

class CrashCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:crash';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (config('queue.default') === 'sync') {
            echo "This example won't work with the sync driver. Please use a proper queue driver.\n";
            return 1;
        }
        MyCrashJob::dispatch();
    }
}
