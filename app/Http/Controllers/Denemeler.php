<?php

namespace App\Http\Controllers;


use App\Cache\Calendar\Work;
use App\Cache\Calendar\WorkDays;
use App\Elastic\Models\All;
use App\Elastic\Models\Demand;
use App\Models\Bid;
use App\Models\Blog;
use App\Models\Company\Company;
use App\Models\Company\CompanyEvent;
use App\Models\Machine\Entity;
use App\Notifications\bid\reject;
use App\Scopes\ActiveScope;
use App\Services\Company\CompanyLongLat;
use App\Services\Company\RegexIframeMap;
use App\Services\Components\GoogleMapsQueryArgsDeserializer;
use App\Services\ElasticSearch\ElasticSearch;
use App\User;
use App\Services\Components\Application;
use DateTime;
use App\Mail\Fair\ReminderMail;
use Carbon\Carbon;
use App\Jobs\FairReminderMail;
use App\Services\Redis\Redis;
// use Illuminate\Support\Facades\Redis;
use App\Services\Advertisement\Advertisement;

class Denemeler extends Controller
{
    public function getRedis()
    {
        // $redis = Redis::connection();

        
        // dd( $redis->get("categories") );

        $redis = new Redis();

        dd( $redis->get("categories")->paginate(10) );
    }

    public function advertisement()
    {
        $advertisement = new Advertisement();
        
        dd( $advertisement->detect() );
    }

    function asd()
    {
        $emailJob = (new FairReminderMail())->delay(Carbon::now()->addSeconds(3));
        dispatch($emailJob);

        echo 'email sent';        
    }

    function as1d()
    {
        $client = ElasticSearch::connect();
    }

    public function emptyPage()
    {
        return view('empty-page');
    }
}























































