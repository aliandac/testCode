<?php

namespace App\Console\Commands\Redis;

use Illuminate\Console\Command;
use App\Cache\Machine\Category;
use  App\Models\Machine\MachineCategory as CategoryModel;

class MachineCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:machine-categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'save machine categories to redis';

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
        $categories = CategoryModel::with('children', 'entities')->get();

        $cache = new Category();
        $cache->delete();

        $this->line("<fg=green>Machine Categories cache cleared</>");
        
        $cache->set($categories,604800);
        $this->line("<fg=green>Machine Categories cached successfully</>");
        
    }
}
