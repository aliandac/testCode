<?php

namespace App\Console\Commands\Job;

use Illuminate\Console\Command;
use App\Services\Buying\Package\PackageExpire as PackageExpireService;

class PackageExpire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Detect which package expired and add to job';

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
        $expire = new PackageExpireService();
        $expire->run();
    }
}
