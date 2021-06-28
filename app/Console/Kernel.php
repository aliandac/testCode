<?php

namespace App\Console;

use App\Console\Commands\AllModelSaveToElasticSearch;
use App\Console\Commands\CompanyEventSaveToElasticSearch;
use App\Console\Commands\CompanyLatLongSyncFromIframe;
use App\Console\Commands\CreateElasticIndices;
use App\Console\Commands\CreateSpecificElasticIndex;
use App\Console\Commands\DeleteAllElasticIndices;
use App\Console\Commands\DeleteSpecificElasticIndex;
use App\Console\Commands\DemandsSaveToElasticSearchCommand;
use App\Console\Commands\ElasticCompanyRefreshCommand;
use App\Console\Commands\ElasticSearchRefreshIndices;
use App\Console\Commands\SaveBlogToElasticSearch;
use App\Console\Commands\workDaysSaveToRedisCommand;
use App\Console\Commands\ImageControl;
use App\Console\Commands\Redis\CompanySaveToRedis;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [

        DeleteAllElasticIndices::class,
        CreateElasticIndices::class,
        CreateSpecificElasticIndex::class,
        ElasticCompanyRefreshCommand::class,
        SaveBlogToElasticSearch::class,
        ElasticSearchRefreshIndices::class,
        DeleteSpecificElasticIndex::class,
        DemandsSaveToElasticSearchCommand::class,
        CompanyEventSaveToElasticSearch::class,
        AllModelSaveToElasticSearch::class,
        CompanyLatLongSyncFromIframe::class,
        workDaysSaveToRedisCommand::class,
        ImageControl::class,
        CompanySaveToRedis::class,

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('sitemap:generate')
        //          ->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
