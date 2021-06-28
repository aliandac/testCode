<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Observers\Elastic\BlogElasticObserver;
use Illuminate\Console\Command;

class SaveBlogToElasticSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:blog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all blogs  from mysql and  save to elastic search ';

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

        $allBlog=Blog::get();

        /**
         * @var Blog $blog
         */
        foreach ($allBlog as $blog) {
            BlogElasticObserver::created($blog);
            $this->line("<fg=green>$blog->title created</>");
        }

        return;
    }
}
