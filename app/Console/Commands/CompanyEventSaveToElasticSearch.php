<?php

namespace App\Console\Commands;

use App\Models\Company\CompanyEvent;
use App\Observers\CompanyEventObserver;
use App\Observers\Elastic\CompanyEventObserverElastic;
use Illuminate\Console\Command;

class CompanyEventSaveToElasticSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:event';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'all company events save to elastic search ';

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

        $events=CompanyEvent::get();

        foreach ($events as $event) {

            CompanyEventObserverElastic::created($event);
            $this->line("<fg=green>$event->name created</>");

        }

        return ;
    }
}
