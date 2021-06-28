<?php

namespace App\Console\Commands;

use App\Models\Bid;
use App\Observers\Elastic\BidElasticObserver;
use Illuminate\Console\Command;

class SaveBidToElasticSearchCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:bid';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'all of bids to save to elastic search';

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

        $bids=Bid::get();
        foreach ($bids as $bid) {
            BidElasticObserver::created($bid);
            $this->line("<fg=green>$bid->name created</>");

        }

    }
}
