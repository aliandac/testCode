<?php

namespace App\Console\Commands;

use App\Models\Bid;
use App\Models\Blog;
use App\Models\Company\Company;
use App\Models\Company\CompanyEvent;
use App\Models\Machine\Entity;
use App\Models\Request;
use App\Observers\Elastic\BidElasticObserver;
use App\Observers\Elastic\BlogElasticObserver;
use App\Observers\Elastic\CompanyElasticObserver;
use App\Observers\Elastic\CompanyEventObserverElastic;
use App\Observers\Elastic\DemandElasticObserver;
use App\Observers\Elastic\MachineElasticObserver;
use Exception;
use Illuminate\Console\Command;


class AllModelSaveToElasticSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'all tables save to elastic search';

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

        $allBlog = Blog::where('active',1)->get();

        /**
         * @var Blog $blog
         */
        foreach ($allBlog as $blog) {
            try {
                BlogElasticObserver::created($blog);
                $this->line("<fg=green>$blog->id $blog->title created</>");
            } catch (Exception $exception) {
                $message = $exception->getMessage();
                $this->line("<fg=red>$blog->id $blog->name unsuccessful $message</>");

            }

        }


        $bids = Bid::where('active',1)->get();
        foreach ($bids as $bid) {

            try {
                BidElasticObserver::created($bid);
                $this->line("<fg=green>$bid->id $bid->name created</>");
            } catch (Exception $exception) {
                $message = $exception->getMessage();
                $this->line("<fg=red>$bid->id $bid->name unsuccessful $message</>");
            }


        }


        $machines = Entity::where('active',1)->get();

        /**
         * @var Entity $machine
         */
        foreach ($machines as $machine) {

            try {
                MachineElasticObserver::created($machine);
                $this->line("<fg=green>$machine->id $machine->name inserted</>");
            } catch (Exception $exception) {
                $message = $exception->getMessage();
                $this->line("<fg=red>$machine->id $machine->name unsuccessful $message</>");
            }

        }


        $events = CompanyEvent::where('active',1)->get();

        foreach ($events as $event) {

            try {

                CompanyEventObserverElastic::created($event);
                $this->line("<fg=green>$event->id $event->name created</>");
            } catch (Exception $exception) {
                $message = $exception->getMessage();
                $this->line("<fg=red>$event->id $event->name unsuccessful  $message</>");
            }

        }


        $demands = Request::where('active',1)->get();

        /**
         * @var Request $demand
         */
        foreach ($demands as $demand) {

            try {
                DemandElasticObserver::created($demand);
                $this->line("<fg=green>$demand->id $demand->title created</>");
            } catch (Exception $exception) {
                $message = $exception->getMessage();
                $this->line("<fg=red>$demand->id $demand->title unsuccessful $message</>");
            }

        }


        $companies = Company::where('active',1)->get();

        foreach ($companies as $company) {

            try {
                CompanyElasticObserver::created($company);
                $this->line("<fg=green>$company->name success</>");
            } catch (Exception $exception) {

                $message = $exception->getMessage();
                $this->line("<fg=red>$company->id $company->name unsuccessful</>");

            }


        }

        $this->line("<fg=red>command completed");

        return "completed";


    }
}
