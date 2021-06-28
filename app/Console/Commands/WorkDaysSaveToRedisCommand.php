<?php

namespace App\Console\Commands;

use App\Cache\Calendar\WorkDays;
use Illuminate\Console\Command;

class workDaysSaveToRedisCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:work-days';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'work days save to redis';

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
     * @return mixed
     */
    public function handle()
    {

        $workDays = new WorkDays();
        $workDays->set();
        $result = $workDays->get();
        $dump = var_dump($result);
        $this->line("<fg=green> cached work days</>");
        $this->line("<fg=green> $dump</>");



        return ;

    }
}
