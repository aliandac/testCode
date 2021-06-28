<?php

namespace App\Providers\ShowingByPackage;

use Illuminate\Support\ServiceProvider;
use App\Services\Buying\Demand\Demand;
use Illuminate\Support\Facades\View;

class ShowingDemandProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $demand = new Demand();
        $show = $demand->check();

        View::composer(['frontend.demands.demands','frontend.company.companyProfile.demand','frontend.company.center'], function ($view) use ($show) {


            $view->with(['demandblocking' => $show]);
        });
    }
}
