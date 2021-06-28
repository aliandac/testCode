<?php

namespace App\Providers;

use App\Models\Modelhelpers\Category\PopularCategory;
use App\Models\Modelhelpers\Survey\TopRateCompanies;
use App\Services\Footer\Activity;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View as ViewAlias;
use App\Models\Settings;
use App\Services\Redis\Redis;

/**
 * Class FooterTemplateProvider
 * @package App\Providers
 */
class FooterTemplateProvider extends ServiceProvider
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
        $redis = new Redis();

        if ( !$redis->exists('activity_of_week') ) {
            $redis->set('activity_of_week',serialize( Activity::ofWeek(10) ));
        }

        if ( !$redis->exists('popular_companies') ) {
            $redis->set('popular_companies',serialize( TopRateCompanies::sortBy()->take(10) ));
        }

        $activityOfWeeks = $redis->get('activity_of_week');
        $popularCompanies = $redis->get('popular_companies');

        $popular = new PopularCategory();
        $popularCategories = $popular->take(10);

        View::composer('frontend.layout.footer', function ($view) use ($activityOfWeeks, $popularCompanies, $popularCategories) {
            /**
             * @var ViewAlias $view
             */

             $keys = [  'email'         => 'contact-email',
                        'facebook'      => 'facebook',
                        'instagram'     => 'instagram',
                        'twitter'       => 'twitter',
                        'youtube'       => 'youtube',
                        'phone'         => 'contact-phone',
                    ];

            $info = array_map( [$this,'contactInfo'],$keys );

            $view->with('contact', $info)
                    ->with('activityOfWeeks', $activityOfWeeks)
                    ->with('popularCompanies', $popularCompanies)
                    ->with('popularCategories', $popularCategories);
        });
        View::composer('food.layout.footer', function ($view) use ($activityOfWeeks, $popularCompanies, $popularCategories) {
            /**
             * @var ViewAlias $view
             */

            $keys = [  'email'         => 'contact-email',
                'facebook'      => 'facebook',
                'instagram'     => 'instagram',
                'twitter'       => 'twitter',
                'youtube'       => 'youtube',
                'phone'         => 'contact-phone',
            ];

            $info = array_map( [$this,'contactInfo'],$keys );

            $view->with('contact', $info)
                ->with('activityOfWeeks', $activityOfWeeks)
                ->with('popularCompanies', $popularCompanies)
                ->with('popularCategories', $popularCategories);
        });
    }

    public function contactInfo($key)
    {
        return Settings::where('key',$key)->firstOrFail()->value;
    }
}
