<?php

namespace App\Console\Commands\Job;

use Illuminate\Console\Command;
use App\Services\Advertisement\Advertisement;

class AdvertisementTimes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'advertisement:expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete expired advertisements';

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
        $advertisement = new Advertisement();

        $advertisement->run();
    }
}