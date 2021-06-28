<?php

namespace App\Listeners;

use App\Services\Company\companySession;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Redis;

class AuthLoginListener
{
    private $redis;
    
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $session=new companySession($event->user);
        $session->set();

        $this->redis = Redis::connection();
        
        $this->redis->del('company');
        
        if ( isset( auth()->user()->company->id ) ) {
            $this->redis->set('company',auth()->user()->company->id);
        }
    }
}
