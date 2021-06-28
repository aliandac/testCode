<?php

namespace App\Console\Commands\Redis;

use Illuminate\Console\Command;
use App\Models\Country;
use App\Cache\Country\Country as CountryCache;

class CountrySaveToRedis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:country';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'save country to redis';

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
        $countries = Country::get();

        $cache = new CountryCache();
        $cache->delete();

        $this->line("<fg=green>Countries cache cleared</>");
        
        $cache->set($countries,604800);
        $this->line("<fg=green>Countries cached successfully</>");
        
    }
}
