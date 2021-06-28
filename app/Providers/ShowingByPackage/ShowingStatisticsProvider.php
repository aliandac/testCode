<?php

namespace App\Providers\ShowingByPackage;

use Illuminate\Support\ServiceProvider;
use App\Services\Buying\Statistics\Statistics;
use Illuminate\Support\Facades\View;

class ShowingStatisticsProvider extends ServiceProvider
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
        $statistics = new Statistics();
        $show = $statistics->check();

        $views = ['user-panel.survey.index','user-panel.layout.menu'];

        View::composer($views, function ($view) use ($show) {
            /**
             * @var ViewAlias $view
             */
            $view->with('statisticsblocking', $show);
        });
    }
}
