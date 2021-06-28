<?php

namespace App\Console\Commands\Redis;

use Illuminate\Console\Command;
use App\Models\Category;
use App\Cache\Category\Category as CategoryCache;


class CompanyCategorySaveToRedis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:company-category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'save company categories to redis';

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
        $categories = Category::where('active',1)->get();

        $cache = new CategoryCache();
        $cache->delete();

        $this->line("<fg=green>Categories cache cleared</>");
        
        $cache->set($categories,259200);
        $this->line("<fg=green>Categories cached successfully</>");
        
    }
}
