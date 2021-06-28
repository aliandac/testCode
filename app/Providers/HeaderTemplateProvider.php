<?php

namespace App\Providers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View as ViewAlias;
use Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

/**
 * Class HeaderTemplateProvider
 * @package App\Providers
 */
class HeaderTemplateProvider extends ServiceProvider
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

        View::composer('frontend.layout.header', function ($view) {

            $redis = Redis::connection();

            /**
             * @var ViewAlias $view
             */
            $view->with([ 
                        'routeName'         => Request::route()->getName(),
                        'companyFromCache'  => $redis->get('company'),
                    ]);
        });
    }
}
