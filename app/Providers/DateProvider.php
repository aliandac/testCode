<?php

namespace App\Providers;

use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

/**
 * Class DateProvider
 * @package App\Providers
 */
class DateProvider extends ServiceProvider
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
        Validator::extend('custom_date',function ($attribute,$value,$parameters){

           return (bool)strtotime($value);
        });


    }
}
