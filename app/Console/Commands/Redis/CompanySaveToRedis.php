<?php

namespace App\Console\Commands\Redis;

use Illuminate\Console\Command;
use App\Models\Company\Company;
use App\Cache\Company\Company as CompanyCache;

class CompanySaveToRedis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:companies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'save companies to redis';

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
        $companies = Company::with('category')->latest()->get();

        $cache = new CompanyCache();
        $cache->delete();

        $this->line("<fg=green>Companies cache cleared</>");
        
        $cache->set($companies,259200);
        $this->line("<fg=green>Companies cached successfully</>");
    }
}
