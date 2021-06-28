<?php

namespace App\Console\Commands\Redis;

use Illuminate\Console\Command;
use App\Cache\Product\Category;
use App\Models\Product\ProductCategory as CategoryModel;

class ProductCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:product-categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'save product categories to redis';

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
        $categories = CategoryModel::where('active',1)->with('children')->get();

        $cache = new Category();
        $cache->delete();

        $this->line("<fg=green>Product Categories cache cleared</>");

        $cache->set($categories,604800);
        $this->line("<fg=green>Product Categories cached successfully</>");

    }
}
