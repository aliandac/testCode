<?php

namespace App\Listeners;

use App\Services\Company\companySession;
use Illuminate\Support\Facades\Redis;

class AuthLogoutListener
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
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        $session = new companySession($event->user);
        $session->session()->forget();

        $this->redis = Redis::connection();
        
        $this->redis->del('company');
    }
}
