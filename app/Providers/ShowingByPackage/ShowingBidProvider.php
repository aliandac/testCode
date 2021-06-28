<?php

namespace App\Providers\ShowingByPackage;

use Illuminate\Support\ServiceProvider;
use App\Services\Buying\Bid\Bid;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Request;

class ShowingBidProvider extends ServiceProvider
{
    private $rand;
    
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
    public function boot( Request $request )
    {
        $bid = new Bid();
        $show = $bid->check();

        $views = ['frontend.bids.bids','frontend.bids.bid'];

        View::composer($views, function ($view) use ($show) {
            /**
             * @var ViewAlias $view
             */
             
            $view->with('bidblocking', $show);
        });
    }
}