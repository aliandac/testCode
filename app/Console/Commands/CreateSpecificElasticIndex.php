<?php

namespace App\Console\Commands;

use App\Elastic\Settings\Mappings\GeoPointMapping;
use App\Services\ElasticSearch\ElasticSearch;
use Illuminate\Console\Command;

/**
 * @noinspection PhpUnused
 * Class CreateSpecificElasticIndex
 * @package App\Console\Commands
 */
class CreateSpecificElasticIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:index {index}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'crete specific index for elasticsearch example php artisan elastic:index my_index';

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

        $index = $this->argument('index');
        $es = ElasticSearch::connect();

        if (!$es->indices()->exists(['index' => $index])) {
            $es->indices()->create([
                'index'=>$index,
                'body'=>GeoPointMapping::MAPPING

            ]);
            $this->line("<fg=green>\ncretaed $index index\n</>");
        } else {
            $this->line("<fg=red>$index index already exists</>");
        }

        return "\nnacar medya";

    }
}
