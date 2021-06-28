<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Settings;
use Illuminate\Support\Facades\View;

class MailFooterProvider extends ServiceProvider
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
        View::composer('frontend.mail.layout.footer', function ($view) {

            $facebook = Settings::where('key','facebook')->firstOrFail()->value;
            $twitter = Settings::where('key','twitter')->firstOrFail()->value;
            $youtube = Settings::where('key','youtube')->firstOrFail()->value;
            $instagram = Settings::where('key','instagram')->firstOrFail()->value;

            /**
             * @var ViewAlias $view
             */
            $view->with([ 
                        'facebook'          => $facebook,
                        'twitter'           => $twitter,
                        'instagram'         => $instagram,
                        'youtube'           => $youtube,
                    ]);
        });
    }
}
