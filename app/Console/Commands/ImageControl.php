<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Image\ImageSourceControl;

class ImageControl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'image:control';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a job for images in the database';

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
        $image = new ImageSourceControl();
        $image->runJob();
        $this->line("<fg=green>Image job created successfully</>");
    }
}
