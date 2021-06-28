<?php

namespace App\Console\Commands;

use App\Models\Company\Company;
use App\Services\Company\CompanyLongLat;
use App\Services\Company\RegexIframeMap;
use App\Services\Components\GoogleMapsQueryArgsDeserializer;
use Illuminate\Console\Command;

class CompanyLatLongSyncFromIframe extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:iframe-parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get long lat from iframe and save to long lat of company';

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

        $companies=Company::get();

        /**
         * @var Company $company
         */
        foreach ($companies as $company) {


            if(strlen($company->map_url)>10)

            {
                try{

                    $iframe=RegexIframeMap::parse(Company::findOrFail($company->id)->map_url);
                    $res = GoogleMapsQueryArgsDeserializer::deserialize($iframe);

                    $company->update([

                        'latitude'=>CompanyLongLat::parse($res)->getLatitude(),
                        'longitude'=>CompanyLongLat::parse($res)->getLongitude(),

                    ]);

                    $this->line("<fg=green>index $company->id $company->name synced created</>");
                }
                catch (\Exception $exception)
                {
                    $this->line("<fg=red>index $company->id $company->name un succesfull</>");
                }


            }




        }
    }
}
