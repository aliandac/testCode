<?php

namespace App\Console\Commands;

use App\Elastic\Settings\Mappings\GeoPointMapping;
use App\Services\ElasticSearch\ElasticSearch;
use Illuminate\Console\Command;

class CreateElasticIndices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create elastic search all indices(index)';

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
        $indices = ['companies', 'blogs', 'bids', 'company_events', 'machines','requests'];
        $es = ElasticSearch::connect();

        foreach ($indices as $index) {
            if (!$es->indices()->exists(['index' => $index])) {
                $es->indices()->create([
                    'index'=>$index,
                    'body'=>GeoPointMapping::MAPPING

                ]);
                $this->line("<fg=green>index $index created</>");
            } else {
                $this->line("<fg=red>$index already exist</>");
            }


        }


        return null;

    }
}
